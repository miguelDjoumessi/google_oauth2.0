<?php 
require __DIR__ . '/GoogleLogin/config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign In</h1>
    <a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email https://www.googleapis.com/auth/userinfo.profile&access_type=online&response_type=code&redirect_uri=<?= urlencode("http://localhost:8000/GoogleLogin/process.php") ?>&client_id=<?= GOOGLE_CLIENT_ID ?>">
        Sign In
    </a>
</body>
</html>