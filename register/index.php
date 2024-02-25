<?php
include("../static/config.php");
session_start();
$error = ""; // Initialize error variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if it's a registration or login attempt
  if (isset($_POST['register'])) {
    // Registration process
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    // Check if the username already exists
    $check_query = "SELECT id FROM admin WHERE username = ?";
    $check_stmt = $db->prepare($check_query);
    $check_stmt->bind_param("s", $myusername);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
      $error = "Username already exists. Please choose another username.";
    } else {
      // Insert the new user into the database
      $insert_query = "INSERT INTO admin (username, passcode) VALUES (?, ?)";
      $insert_stmt = $db->prepare($insert_query);
      $insert_stmt->bind_param("ss", $myusername, $mypassword);
      if ($insert_stmt->execute()) {
        $_SESSION['login_user'] = $myusername;
        header("location: ../dashboard");
      } else {
        $error = "Registration failed. Please try again later.";
      }
    }
  } else {
    // Login process
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM admin WHERE username = ? and passcode = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $myusername, $mypassword);
    $stmt->execute();
    $stmt->store_result();

    $count = $stmt->num_rows;

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
      $_SESSION['login_user'] = $myusername;
      header("location: ../dashboard");
    } else {
      $error = "Your Login Name or Password is invalid";
    }
  }
}
?>
<html>

<head>
  <title>Registration Page</title>

  <style type="text/css">
    body {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 14px;
    }

    label {
      font-weight: bold;
      width: 100px;
      font-size: 14px;
    }

    .box {
      border: #666666 solid 1px;
    }
  </style>

</head>

<body bgcolor="#FFFFFF">

  <div align="center">
    <div style="width:300px; border: solid 1px #333333; " align="left">
      <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Registration</b></div>

      <div style="margin:30px">

        <form action="" method="post">
          <label>UserName :</label><input type="text" name="username" class="box" /><br /><br />
          <label>Password :</label><input type="password" name="password" class="box" /><br /><br />
          <input type="submit" name="register" value=" Register " /><br />
        </form>
        <p>Уже есть учетная запись? <a href="../login/">Войти</a></p>
        <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

      </div>

    </div>

  </div>

</body>

</html>