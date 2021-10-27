<?php
include_once '../common/head.php';
?>
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Índex de categories</h1>
            <p class="lead mb-0">Aquí es mostren les diferents categories en les quals s'agrupen els artícles</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col-6">
    <a href="lloros.php" class="card-link-no-decoration">
      <div class="card h-100">
        <img src="../assets/img/capybara.jpg" class="card-img-top img-fluid" alt="..." style="width: inherit;">
        <div class="card-body">
          <h5 class="card-title">Capybaras</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-6">
    <a href="lloros.php" class="card-link-no-decoration">
      <div class="card h-100">
        <img src="../assets/img/lloro.jpg" class="card-img-top img-fluid" alt="..." style="width: inherit;">
        <div class="card-body">
          <h5 class="card-title">Lloros</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-6">
    <a href="lloros.php" class="card-link-no-decoration">
      <div class="card h-100">
        <img src="../assets/img/pingui.jpg" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pinguins</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-6">
    <a href="lloros.php" class="card-link-no-decoration">
      <div class="card h-100">
        <img src="../assets/img/lluna.jpeg" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gossos</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </a>
  </div>
</div>
</div>

<?php 
include_once '../common/footer.php';
?>