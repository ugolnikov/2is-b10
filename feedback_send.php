<?php
require('./static/config.php');
$name = $_POST['name'];
$tel = $_POST['tel'];
$message = $_POST['message'];

echo $name;
echo $tel;
echo $message;
$sql = "INSERT INTO feedback (name, tel, message) VALUES ('$name', '$tel', '$message')";

if (mysqli_query($db, $sql)) {
    echo "Спасибо за обращение";
    header('url=./; refresh=2;');
} else {
    echo "Ошибка: " . $sql . "<br>" . mysqli_error($db);
}
$db->close();
