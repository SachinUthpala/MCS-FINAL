<?php
// init configuration
$GOOGLE_CLIENT_ID = "953672644228-rhlio6n259idaqjaiksrprgl0ubo475j.apps.googleusercontent.com";
$GOOGLE_SECRET_KEY = "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";
$GOOGLE_REDIRECT_URL = "https://www.mcssw.com/BackEnd/GoogleSignUp.php";

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($GOOGLE_CLIENT_ID);
$client->setClientSecret($GOOGLE_SECRET_KEY);
$client->setRedirectUri($GOOGLE_REDIRECT_URL);
$client->addScope("email");
$client->addScope("profile");


?>