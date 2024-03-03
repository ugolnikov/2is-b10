<?php
include("../static/session.php");
include("../static/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['news_id'])) {
    $news_id = $_POST['news_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $photo_url = isset($_POST['photo_url']) ? $_POST['photo_url'] : 'нет фото';

    $query = "UPDATE news SET title='$title', content='$content', photo_url='$photo_url' WHERE id='$news_id'";

    $result = $db->query($query);

    if ($result) {
        echo "Новость успешно обновлена!";
    } else {
        echo "Ошибка: " . $db->error;
    }

    $db->close();
} else {
    echo "Ошибка: данные формы не были отправлены правильно.";
}
