<?php
include('../static/config.php');
$name = $_POST['name'];
$tel = $_POST['tel'];
$message = $_POST['message'];

echo $name;
echo $tel;
echo $message;
$sql = "INSERT INTO feedback (name, tel, message) VALUES ('$name', '$tel', '$message')";




if ($db->query($sql) === TRUE) {
    echo "<p>Ваше сообщение успешно отправлено. Спасибо!</p>";
    // header('Location:../');
} else {
    echo "Ошибка: " . $sql . "<br>" . $db->error;
}
$db->close();
