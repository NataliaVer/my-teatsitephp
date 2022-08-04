<?php 
 session_start();

 if ($_SESSION['user']) {
    header('Location: profile.php');
  }
 ?>

<!doctype html>
<html lang="ua">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-
  scale=1.0">
  <meta http-equiv="X-UA-Compartible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title>Вхід</title>
</head>

<body>
<div class="container mt-5">
  <?php require "blocks/header.php" ?>
<main class="form-signin w-50 m-auto">
  <form action="vendor/singup.php" method="post">
  
    <div class="form-floating">
      <input type="name" name = "name" class="form-control" id="floatingInput" placeholder="name">
      <label for="floatingInput">Повне ім'я</label>
    </div>
    <div class="form-floating">
      <input type="email" name="login" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Логін</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Пароль</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pass_confirm" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Підтвердження пароля</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Зареєструватись</button>
    <p>
      У вас уже є акаунт - <a href="/auth.php">авторизуйтесь</a>
    </p>
    <?php
        if ($_SESSION['message']) {
           echo '<p class="msg">'.$_SESSION['message'].'</p>';
         } 
        unset($_SESSION['message'])
        ?>
  </form>
</main>
</div>
<?php require "blocks/footer.php" ?>
</body>