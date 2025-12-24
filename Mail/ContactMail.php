<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request.");
}

$email         = trim($_POST['email']);
$fullName      = trim($_POST['name']);
$contactNumber = trim($_POST['Phone']);
$subjectInput  = trim($_POST['subject']);
$inquiry       = trim($_POST['message']);

$adminEmail = "helpdesk@maryland.lk";
$subject    = "New Contact Inquiry – MCS Computer Systems";

$message = "
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Contact Inquiry</title>
</head>
<body style='background-color: #f4f6f8; font-family: sans-serif; padding: 20px;'>
    <table align='center' cellpadding='0' cellspacing='0' style='max-width: 600px; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); font-family: sans-serif;'>
        
        <tr>
            <td style='padding: 20px; text-align: center; background-color: #011A41; color: white;'>
                <h1 style='margin: 0; font-size: 28px;'>New Contact Message</h1>
                <h4 style='margin: 5px 0 0; font-size: 20px;'>MCS Computer Systems</h4>
            </td>
        </tr>

        <tr>
            <td style='padding: 20px; color: #011A41; font-size: 16px;'>
                <p><strong>Name:</strong> {$fullName}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Contact Number:</strong> {$contactNumber}</p>
                <p><strong>Subject:</strong> {$subjectInput}</p>

                <hr style='border: 1px solid #355EFC; margin: 20px 0;'>

                <p style='font-weight: bold;'>Message:</p>
                <p style='line-height: 1.6;'>
                    {$inquiry}
                </p>
            </td>
        </tr>

        <tr>
            <td style='padding: 15px; background: #011A41; color: white; text-align: center; font-size: 16px;'>
                📩 This message was submitted via the website contact form.
            </td>
        </tr>

        <tr>
            <td style='background: #011A41; color: white; text-align: center; padding: 10px; font-size: 16px;'>
                &copy; " . date('Y') . " MCS Computer Systems. All rights reserved.
            </td>
        </tr>

    </table>
</body>
</html>
";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: {$fullName} <{$email}>\r\n";
$headers .= "Reply-To: {$email}\r\n";

if (mail($adminEmail, $subject, $message, $headers)) {
    echo "Your message has been sent successfully.";
} else {
    echo "Failed to send your message. Please try again later.";
}
?>
