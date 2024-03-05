<?php
require("../../static/session.php");
require_once("../../static/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['news_id'])) {
    $news_id = $_POST['news_id'];

    $query = "DELETE FROM news WHERE id='$news_id'";


    $result = $db->query($query);

    if ($result) {
        echo "Новость успешно удалена!";
    } else {
        echo "Ошибка: " . $db->error;
    }

    $db->close();
    header("Location: ../news_admin");
}
