<?php
include('../static/config.php');
$name = $_POST['name'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$sql = "INSERT INTO feedback (name, tel, message) VALUES ('$name', '$tel', '$message')";

if ($db->query($sql) === TRUE) {
    echo "<p>Ваше сообщение успешно отправлено. Спасибо!</p>";
    header('Location:../index.php; refresh=1;');
} else {
    echo "Ошибка: " . $sql . "<br>" . $db->error;
}
$db->close();
