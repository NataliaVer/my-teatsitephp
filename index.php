<?php 
  session_start();
  $username = $_SESSION['user']['name'];
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

      <h3 class="mb-5">Наші статті</h3>
      
      <div class="d-flex flex-wrap">
      <?php
        for($i = 0; $i < 5; $i++):
      ?>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Назва статті</h4>
          </div>
          <div class="card-body">
            <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
              <li>текст статті</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Докладніше</button>
          </div>
        </div>
      </div>
      <?php endfor; ?>
      </div>
    </div>
    <?php require "blocks/footer.php" ?>

</body>
</html>