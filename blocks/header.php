<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">RybalkaN</span>
      </a>
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Головна</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Контакти</a>
      </nav>
      <?php 
        if(isset($_COOKIE['user']) && $_COOKIE['user'] == 'Так'):
      ?>
      <a class="btn btn-outline-primary" href="/auth.php">Кабінет користувача</a>
      <?php else: ?>
      <a class="btn btn-outline-primary" href="/auth.php">Увійти</a>
      <?php endif; ?>
    </div>