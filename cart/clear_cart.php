<?php
require('../static/config.php');
require('../static/session.php');

if (!isset($_SESSION['login_user'])) {
    header("Location: ../login");
    exit;
}

$user_id = $_SESSION['user_id'];

$clear_sql = "DELETE FROM cart WHERE user_id = $user_id";

if ($db->query($clear_sql) === TRUE) {
    header('Location: ./');
    exit;
} else {
    echo "Error clearing cart: " . $db->error;
}
