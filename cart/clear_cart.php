<?php
require('../static/session.php');
require('../static/config.php');
$clear_sql = "DELETE FROM cart WHERE user_id = $user_id";
if ($db->query($clear_sql) === TRUE) {
    header('URL: ./');
}
