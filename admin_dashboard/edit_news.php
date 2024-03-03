<?php
include("../static/session.php");
include("../static/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['news_id'])) {
    $news_id = $_POST['news_id'];

    $query = "SELECT * FROM news WHERE id='$news_id'";
    $result = $db->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        echo "<h1>Редактирование новости</h1>";
        echo "<form action='update_news.php' method='post'>";
        echo "<input type='hidden' name='news_id' value='" . $row['id'] . "'>";
        echo "<input type='text' name='title' value='" . $row['title'] . "' placeholder='Заголовок'><br>";
        echo "<input type='text' name='photo_url' value='" . $row['photo_url'] . "' placeholder='Ссылка к фото'><br>";
        echo "<textarea name='content' placeholder='Текст новости'>" . $row['content'] . "</textarea><br>";
        echo "<input type='submit' value='Обновить новость'>";
        echo "</form>";
    } else {
        echo "Новость не найдена!";
    }

    $db->close();
}
