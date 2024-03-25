<?php
error_reporting(-1);
require_once('config.php');
session_start();

$user_check = $_SESSION['login_user'];

$admin_check = mysqli_query($db, "SELECT id FROM admin WHERE username = '$user_check'");
$isAdmin = mysqli_num_rows($admin_check) > 0;

if (!isset($_SESSION['login_user'])) {
  if (!strpos($_SERVER['REQUEST_URI'], 'login')) {
    header("location: ../login");
    die();
  }
}

if ($isAdmin) {
  if (!strpos($_SERVER['REQUEST_URI'], 'admin_dashboard')) {
    header("location: ../admin_dashboard");
    die();
  }
}


if ($isAdmin) {
  $ses_sql = mysqli_query($db, "SELECT username FROM admin WHERE username = '$user_check'");
  $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
  $login_session = $row['username'];
} else {
  $ses_sql = mysqli_query($db, "SELECT username FROM users WHERE username = '$user_check'");
  $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
  $login_session = $row['username'];
  $_SESSION['user_id'] = mysqli_query($db, "SELECT id FROM users WHERE username = '$login_session'")->fetch_assoc()['id'];
}
