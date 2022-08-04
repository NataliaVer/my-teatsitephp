<?php 
  session_start();
?>

<!doctype html>
<html lang="ua">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-
  scale=1.0">
  <meta http-equiv="X-UA-Compartible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>Контактна форма</title>
</head>
<body >
    <div class="container mt-5">
      <?php require "blocks/header.php" ?>
     <h3>Контактна форма</h3>
     <form action="check.php" method="post">
       <input type="email" name="email" placeholder="Введіть Email"class="form-control"><br>
       <textarea name="message" class="form-control" placeholder="Введіть ваше повідомлення"></textarea><br>
       <button type="submit" name="send" class="btn btn-success">Відправити</button>
     </form>
    </div>
    
    <?php require "blocks/footer.php" ?>

</body>
</html>