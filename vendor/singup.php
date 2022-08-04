<?php 
     session_start();
     require_once 'conect.php';

     $name = $_POST['name'];
     $login = $_POST['login'];
     $pass = $_POST['pass'];
     $pass_confirm = $_POST['pass_confirm'];

     if ($pass == $pass_confirm) {
        $pass = password_hash($pass, PASSWORD_BCRYPT);
         mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `pass`) VALUES (NULL, '$name', '$login', '$pass')");
         $_SESSION['message'] = 'Регістрація пройшла успішно!';
         header('Location: ../auth.php');
     } else {
        $_SESSION['message'] = 'Паролі не співпадають';
        header('Location: ../register.php');
     }