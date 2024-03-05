<?php
include('../static/config.php');
$name = $_POST['name'];
$tel = $_POST['tel'];
$message = $_POST['message'];

echo $name;
echo $tel;
echo $message;
$sql = "INSERT INTO feedback (name, tel, message) VALUES ('$name', '$tel', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Запись успешно добавлена в базу данных";
} else {
    echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
}
$db->close();
