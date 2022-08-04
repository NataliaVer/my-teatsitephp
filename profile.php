<?php 
  session_start();
  if (!$_SESSION['user']) {
    header('Location: auth.php');
  }
?>

<!doctype html>
<html lang="ua">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-
  scale=1.0">
  <meta http-equiv="X-UA-Compartible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>PHP веб сайт</title>
</head>
<body>
<?php require "blocks/header.php" ?>

    <div class="container mt-5">
      <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?></h2>
      <a href="#"><?= $_SESSION['user']['login'] ?></a>
    </div>
    <?php require "blocks/footer.php" ?>

</body>
</html>