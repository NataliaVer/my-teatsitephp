<?php 
  session_start();
  require_once 'conect.php';

  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $authorization = false;

  $check_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login'"); // AND `pass` = '$pass'"); `users`.`id`

  while ($row = mysqli_fetch_array($check_user)) {
     $bpass = $row["pass"];

     if (password_verify($pass, $bpass)) {
        $authorization = true;

        $_SESSION['user'] = [
         "id" => $row["id"],
         "name" => $row["name"],
         "login" => $login
         ];

        header('Location: ../index.php');
     } 
  }

  if (!$authorization) {
     $_SESSION['message'] = 'Не правильний пароль або логін';
     header('Location: ../auth.php');
  }
?>