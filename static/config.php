<?php
error_reporting(0);
define('DB_SERVER', '31.129.99.31');
define('DB_USERNAME', '2is-b10_2is-b10');
define('DB_PASSWORD', 'HKqddAK447');
define('DB_DATABASE', '2is-b10_2is-b10');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
