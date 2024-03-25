<?
require_once("../static/session.php");
require_once("../static/config.php");
try {
    $fieldName = $_POST['fieldName'];
    $newValue = $_POST['newValue'];
    $userId = $_POST['userId'];
    $sql = "UPDATE users SET $fieldName = :newValue WHERE id = :userId";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':newValue', $newValue);
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();

    echo "success";
} catch (PDOException $e) {
    echo "error";
}
