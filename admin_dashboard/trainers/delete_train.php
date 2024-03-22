<?php
require("../../static/session.php");
require_once("../../static/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['train_id'])) {
    $train_id = $_POST['train_id'];

    $query = "DELETE FROM trainer WHERE id='$train_id'";


    $result = $db->query($query);

    if ($result) {
        echo "Тренер успешно удален!";
    } else {
        echo "Ошибка: " . $db->error;
    }

    $db->close();
    header("Location: ../train_admin");
}
