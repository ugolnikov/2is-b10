<?php
require("../../static/session.php");
require_once("../../static/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['train_id'])) {
    $train_id = $_POST['train_id'];

    $query = "SELECT * FROM trainer WHERE id='$train_id'";
    $result = $db->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        echo "<h1>Редактирование новости</h1>";
        echo "<form action='update_train.php' method='post'>";
        echo "<input type='hidden' name='train_id' value='" . $row['id'] . "'>";
        echo "<input type='text' name='firstname' value='" . $row['firstname'] . "' placeholder='Имя'><br>";
        echo "<input type='text' name='secondname' value='" . $row['secondname'] . "' placeholder='Фамилия'><br>";
        echo "<input type='text' name='photo_url' value='" . $row['photo_url'] . "' placeholder='Ссылка к фото'><br>";
        echo "<input type='submit' value='Обновить тренера'>";
        echo "</form>";
        echo "<a href='../'>Вернуться назад</a>";
    } else {
        echo "Тренер не найден!";
    }

    $db->close();
}
