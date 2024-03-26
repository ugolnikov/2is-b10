<?php
require('./static/config.php');
$name = $_POST['name'];
$tel = $_POST['tel'];
$message = $_POST['message'];

echo $name . "<br>";
echo $tel . "<br>";
echo $message . "<br><br>";
$sql = "INSERT INTO feedback (name, tel, message) VALUES ('$name', '$tel', '$message')";

if (mysqli_query($db, $sql)) {
    echo "<b><i>Спасибо за обращение</i></b>";
    header("Refresh: 0; URL = /");
} else {
    echo "Ошибка: " . $sql . "<br>" . mysqli_error($db);
}
$db->close();
