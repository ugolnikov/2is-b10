<?
require('../static/session.php');
require_once('../static/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['login_user'])) {
        $user_id = $_SESSION['user_id'];

        $total_sql = "SELECT SUM(price) AS total FROM cart WHERE user_id = $user_id";
        $total_result = $db->query($total_sql);

        if ($total_result->num_rows > 0) {
            $total_row = $total_result->fetch_assoc();
            $total_price = $total_row['total'];
            $phone = $_POST['phone'];


            $insert_order_sql = "INSERT INTO orders (user_id, total_amount, phone) VALUES ($user_id, $total_price, $phone)";
            $image = "<img
        src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACB0lEQVR4nO2Yz0sCQRiG59LMJQiiQzf7aWVZYkHXDnkpLIKKICSCCPppJVgRUUIQBEFEaBAEQRCBdAw6hLMd/Au6BHbrGv4BCV+4ymim7uzq2kjzwAtz/F5m99mPRUgikUgkEhMASlxA8buaCBlG1QREUT1Q8gkKgXTiEKltQNUCUBzKGj4dHETVALxgGyjk63cBkgBaY0eiAxQ/5Rk+FYqfkcgAxWMFh8+UcCMRgVeEgZI3zQIKjsEjIkg0gGKf9vDsFraQ4NoEjYilVcirTc1HSQytFtLmutsJnqFBNRvjThBWq1BAm74JByvgn3SIqVUoos3d6T5WYG+mVzytgoY2D2btrEDAYxdPq6ChzaO5HlbgeL5bLK0ChzZPFmyswOlil1haBQ5tni11sgLnKx3iaBUKb5s/ElyzsgKXXivPtyFREa0W3TazcrXZzgpc+9r4Pm7UZK1ybZvp3PhbWYHbnRa+AoqJWuXfNlO522tmBe73m/gLKCZpVde2qRAIH1pYgYeARUcBUn6tGtg2S028rFo1tm2WGhysqDZz8xGug5DXqio0eTZQIlEWrfJqMzfbU5llLnk2dAu0RK3q0WZulkcGWIHk2fCjRA1qVa82cxO9aITV0X41yXMJ70LMkFb1atPUUANaVX/K/vXgSuYW/mMB4lKfPwGGh2r7PS+RSCQSVCm+AQ0vLbmgWFIkAAAAAElFTkSuQmCC'
      />";
            if ($db->query($insert_order_sql) === TRUE) {
                $clear_cart_sql = "DELETE FROM cart WHERE user_id = $user_id";
                if ($db->query($clear_cart_sql) === TRUE) {
                    $image = "<img src='../static/check_mark.png'></img>";
                    $user_result = "<h4>Большое спасибо за заказ!</h4>
                        <p>В ближайшее время мы свяжемся с вами.</p>
                        <a href='../' style='text-decoration: underline;'>Назад</a>";
                } else {
                    $user_result = "Ошибка очистки: " . $db->error;
                }
            } else {
                $user_result = "Ошибка: " . $db->error;
            }
        } else {
            $user_result = "Нет услуг в корзине.";
        }
    } else {
        header("Location: ../login");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Спасибо!</title>
    <link
      rel="shortcut icon"
      href="https://avatars.mds.yandex.net/i?id=22fdb766486190d6283d578c09c19f6874758ac0-9829492-images-thumbs&n=13"
      type="image/png"
    />
    <style>
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      div {
        height: 100vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        vertical-align: middle;
        align-content: center;
      }
    </style>
</head>

<body>
<div>
    <?
    echo $image;
    echo $user_result;
    ?>
</div>
</body>

</html>
