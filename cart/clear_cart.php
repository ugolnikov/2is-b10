<?php
require('../static/session.php');
require('../static/config.php');
if (isset($_POST['clear_cart'])) {
    $clear_sql = "DELETE FROM cart WHERE user_id = $user_id";
    if ($db->query($clear_sql) === TRUE) {
        header('Refresh: 2; URL: ./');
    }
}
