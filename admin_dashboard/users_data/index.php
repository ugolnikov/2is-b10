<?php
require_once("../../static/session.php");
require_once("../../static/config.php");

function getUsers($db)
{
    $query = "SELECT * FROM users";
    $result = $db->query($query);
    $users = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }
    return $users;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, что все необходимые поля были отправлены
    if (isset($_POST["user_id"]) && isset($_POST["full_name"]) && isset($_POST["phone"]) && isset($_POST["email"])) {
        // Получаем массивы данных из формы
        $user_ids = $_POST["user_id"];
        $full_names = $_POST["full_name"];
        $dates_of_birth = $_POST["date_of_birth"];
        $phones = $_POST["phone"];
        $emails = $_POST["email"];

        for ($i = 0; $i < count($user_ids); $i++) {
            $user_id = $user_ids[$i];
            $full_name = $full_names[$i];
            $date_of_birth = !empty($dates_of_birth[$i]) ? date("Y-m-d", strtotime($dates_of_birth[$i])) : null;
            $phone = $phones[$i];
            $email = $emails[$i];
            $query = "UPDATE users SET full_name = ?, date_of_birth = ?, phone = ?, email = ? WHERE id = ?";
            $stmt = $db->prepare($query);
            $stmt->bind_param("ssssi", $full_name, $date_of_birth, $phone, $email, $user_id);
            $stmt->execute();
        }
    }
}

$users = getUsers($db);
$db->close();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора | Управление пользователями</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #0065bd;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s ease all;
        }

        button[type="submit"]:hover {
            background-color: #002f59;
        }
    </style>
</head>

<body>
    <h1>Панель администратора | Управление пользователями</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>ФИО</th>
            <th>Дата рождения</th>
            <th>Телефон</th>
            <th>Email</th>
            <th></th>
        </tr>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><input type="text" name="full_name[]" value="<?= $user['full_name'] ?>"></td>
                    <td><input type="date" name="date_of_birth[]" value="<?= $user['date_of_birth'] ?>"></td>
                    <td><input type="text" name="phone[]" value="<?= $user['phone'] ?>" minlength="11"></td>
                    <td><input type="email" name="email[]" value="<?= $user['email'] ?>"></td>
                    <td>
                        <input type="hidden" name="user_id[]" value="<?= $user['id'] ?>">
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="7" style="text-align: right;">
                    <button type="submit">Сохранить</button>
                </td>
            </tr>
        </form>
    </table>
    <br><br><br>

    <a href="../" style="padding: 1rem;
	background-color: #0065bd;
	margin: 1rem;
	border-radius: 10px;
	color: white !important;
	text-align: center;
	text-wrap: nowrap;
    margin-top: 3rem;">Назад</a>
</body>

</html>