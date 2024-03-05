<?
require('../static/session.php');
require('../static/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['login_user'])) {
        $user_id = $_SESSION['user_id'];

        $total_sql = "SELECT SUM(price) AS total FROM cart WHERE user_id = $user_id";
        $total_result = $db->query($total_sql);

        if ($total_result->num_rows > 0) {
            $total_row = $total_result->fetch_assoc();
            $total_price = $total_row['total'];

            $insert_order_sql = "INSERT INTO orders (user_id, total_amount, status) VALUES ($user_id, $total_price, 'pending')";

            if ($db->query($insert_order_sql) === TRUE) {
                $clear_cart_sql = "DELETE FROM cart WHERE user_id = $user_id";
                if ($db->query($clear_cart_sql) === TRUE) {
                    header("Location: ../; Refresh: 5;");
                    exit;
                } else {
                    echo "Ошибка очистки: " . $db->error;
                }
            } else {
                echo "Ошибка: " . $db->error;
            }
        } else {
            echo "Нет услуг в корзине.";
        }
    } else {
        header("Location: ../login");
        exit;
    }
}
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СТАРТ | Спасибо!</title>
</head>

<body>
    <h4>Большое спасибо за заказ!</h4>
    <p>В ближайшее время мы свяжемся с вами.</p>
</body>

</html>