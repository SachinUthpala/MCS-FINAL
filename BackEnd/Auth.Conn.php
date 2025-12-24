<?php
session_start();
require '../DB/config.conn.php';

// --- Input Sanitization Function ---
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

header('Content-Type: application/json'); // AJAX expects JSON

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // CSRF check
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid CSRF token!'
        ]);
        exit();
    }

    // Get form inputs
    $name = sanitizeInput($_POST['form_name']);
    $email = sanitizeInput($_POST['form_email']);
    $phone = sanitizeInput($_POST['form_phone']);
    $password = $_POST['form_password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $sqlCheck = "SELECT * FROM users WHERE userEmail = :userEmail";
    $checkSmtp = $pdo->prepare($sqlCheck);
    $checkSmtp->execute([':userEmail' => $email]);

    if ($checkSmtp->rowCount() > 0) {
        echo json_encode([
            'status' => 'exists',
            'message' => 'Email already registered! Please login.'
        ]);
        exit();
    }

    // Create verification code
    $Emailcode = random_int(100000, 999999);

    // Insert user
    $sqlToNew = "INSERT INTO users (userName, userEmail, userPassword, VerificationCode, userPhone) 
                 VALUES (:userName, :userEmail, :userPassword, :VerificationCode, :userPhone)";
                 
    $newSmtp = $pdo->prepare($sqlToNew);
    $insertSuccess = $newSmtp->execute([
        ':userName' => $name,
        ':userEmail' => $email,
        ':userPassword' => $hashedPassword,
        ':VerificationCode' => $Emailcode,
        ':userPhone' => $phone
    ]);

    if (!$insertSuccess) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Database error! Please try again.'
        ]);
        exit();
    }

    // Save to session
    $_SESSION['userEmail'] = $email;
    $_SESSION['verificationCode'] = $Emailcode;
    $_SESSION['Verfication'] = 0;
    $_SESSION['AdminType'] = 0;
    $_SESSION['userImage'] = 'Images/UserImages/user.png';
    

    // -----------------------------------------
    // SEND VERIFICATION EMAIL
    // -----------------------------------------
    $userEmail = $email;
    $userName = strstr($email, '@', true);
    $verificationCode = $Emailcode;

    $subject = "Your MCS Computer Systems Verification Code";

    $message = "
    <html>
    <body style='background-color: #f4f6f8; font-family: sans-serif; padding:20px;'>
        <table align='center' style='max-width:600px;background:#fff;border-radius:8px;overflow:hidden;'>
            <tr>
                <td style='padding:20px;text-align:center;background:#011A41;color:white;'>
                    <h1 style='margin:0;'>Greetings {$userName},</h1>
                    <h4 style='margin:5px 0 0;'>Secure Account Verification</h4>
                </td>
            </tr>

            <tr>
                <td style='padding:20px;text-align:center;color:#011A41;'>
                    <h3>Thank you for registering with <strong>MCS Computer Systems</strong>.</h3>
                    <p>Please use the code below to complete your registration.</p>

                    <div style='margin:20px 0;'>
                        <span style='font-size:28px;background:#355EFC;color:white;padding:12px 25px;border-radius:6px;'>
                            {$verificationCode}
                        </span>
                    </div>

                    <p style='color:#ac0b00;font-weight:bold;'>This code expires in 5 minutes.</p>
                </td>
            </tr>

            <tr>
                <td style='padding:15px;background:#011A41;color:white;text-align:center;'>
                    Need help? Contact:
                    <a href='mailto:support@mcscomputers.com' style='color:#fff;font-weight:bold;'>support@mcscomputers.com</a>
                </td>
            </tr>
        </table>
    </body>
    </html>
    ";

    // Mail headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: MCS Computer Systems <no-reply@mcscomputers.com>\r\n";

    // Send email
    $mailSent = mail($userEmail, $subject, $message, $headers);

    if (!$mailSent) {
        echo json_encode([
            'status' => 'error',
            'message' => 'User created but email sending failed. Contact support.'
        ]);
        exit();
    }

    // All good
    echo json_encode([
        'status' => 'success',
        'message' => 'Registration successful! Verification email sent.',
        'redirect' => '../index.php'
    ]);
    exit();
}

// If request invalid
echo json_encode([
    'status' => 'error',
    'message' => 'Invalid request!'
]);
exit();
?>
