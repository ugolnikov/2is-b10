<?php
require('../../static/session.php');
require("../../static/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['train_id'])) {
    $train_id = $_POST['train_id'];
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $photo_url = isset($_POST['photo_url']) ? $_POST['photo_url'] : 'нет фото';

    $query = "UPDATE trainer SET firstname='$firstname', secondname='$secondname', photo_url='$photo_url' WHERE id='$train_id'";

    $result = $db->query($query);

    if ($result) {
        echo "Тренер успешно обновлен!";
    } else {
        echo "Ошибка: " . $db->error;
    }

    $db->close();
    header("Location: ../");
} else {
    echo "Ошибка: данные формы не были отправлены правильно.";
    header("Location: ../");
}
