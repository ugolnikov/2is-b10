<?
include("../static/session.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['login_user'])) {
        header("Location: ./services");
        exit;
    } else {
        header("Location: ./login");
        exit;
    }
}
?>