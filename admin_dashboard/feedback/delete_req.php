<?php
require("../../static/session.php");
require_once("../../static/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['req_id'])) {
    $req_id = $_POST['req_id'];
    $query = "DELETE FROM feedback WHERE id='$req_id'";


    $result = $db->query($query);

    if ($result) {
        echo "Заявка обработанна!";
        header("Location: ../feedback");
    } else {
        echo "Ошибка: " . $db->error;
    }
}
