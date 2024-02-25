<?php
include('../static/session.php');
?>
<html">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Личный кабинет</title>
    <link rel="icon" type="image/x-icon" href="../static/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
    <h1>Добро пожаловать - <?php echo $login_session; ?></h1>
    <?
    $_SERVER['HTTP_CF_CONNECTING_IP'];
    echo gethostname(); ?>
    <h2><a href="logout.php">Sign Out</a></h2>
  </body>

  </html>