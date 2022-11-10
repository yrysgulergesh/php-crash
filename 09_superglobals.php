<?php
/* -------------- Superglobals --------------- */

// Built in variables that are always available in all scopes

/*
    $_GET - Contains information about variables passed through a URL or a form.
    $_POST - Contains information about variables passed through a cookie.
    $_COOKIE - Contains information about variables passed through a cookie.
    $_SESSiON - Contains information about variables passed through a session.
    $_SERVER - Contains information about the server environment.
    $_ENV - Contains information about the server environment variables.
    $_FILES - Contains information about the files uploaded to the script.
    $_REQUEST - Contains information about variables passed through the form or URL.
 */

/// var_dump($_SERVER);
/// var_dump($_GET);
//// var_dump($_REQUEST);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Document ROOT: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SCRIPT_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URL: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Adress: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
</ul>
</body>
</html>

