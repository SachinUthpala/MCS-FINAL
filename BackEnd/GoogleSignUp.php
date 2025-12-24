<?php
require_once '../vendor/autoload.php';
require_once '../DB/config.conn.php';

$client = new Google_Client();
$client->setClientId('953672644228-rhlio6n259idaqjaiksrprgl0ubo475j.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/mcs/BackEnd/GoogleSignUp.php');
$client->addScope('email');
$client->addScope('profile');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_GET['code'])) {
    exit('Invalid Google callback');
}

try {

    // Exchange auth code for token
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if (isset($token['error'])) {
        throw new Exception(json_encode($token));
    }

    // IMPORTANT: set full token array
    $client->setAccessToken($token);

    // Get Google profile
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    $userinfo = [
        'google_id' => $google_account_info->id,
        'email'     => $google_account_info->email,
        'full_name' => $google_account_info->name,
        'picture'   => $google_account_info->picture,
    ];

    // Check user
    $stmt = $pdo->prepare(
        "SELECT userEmail, AdminType, userImg 
         FROM users 
         WHERE userEmail = :email 
         LIMIT 1"
    );
    $stmt->execute([':email' => $userinfo['email']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Login existing user
        $_SESSION['userEmail'] = $user['userEmail'];
        $_SESSION['AdminType'] = $user['AdminType'];
        $_SESSION['userImage'] = $user['userImg'];
    } else {
        // Create new Google user
        $stmt = $pdo->prepare(
            "INSERT INTO users 
            (userName, userEmail, userPassword, AdminType, VerificationCode , userImg)
            VALUES 
            (:name, :email, 'NOTYETFILLED', 0 , 1 , :img)"
        );
        $stmt->execute([
            ':name'  => $userinfo['full_name'],
            ':email' => $userinfo['email'],
            ':img'   => $userinfo['picture']
        ]);

        $_SESSION['userEmail'] = $userinfo['email'];
        $_SESSION['AdminType'] = 0;
        $_SESSION['userImage'] = $userinfo['picture'];
    }

    header('Location: ../index.php');
    exit;

} catch (Exception $e) {
    echo "<pre>";
    echo "ERROR MESSAGE:\n";
    echo $e->getMessage();
    echo "\n\nTRACE:\n";
    print_r($e->getTrace());
    echo "</pre>";
    exit;
}
