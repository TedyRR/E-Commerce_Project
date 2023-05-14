<?php
  require "functions/general.php";
  require "functions/pemesanan.php";

  $data = query("SELECT * FROM produk");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-commerce</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Header Start -->
  <header class="app-header shadow">
    <nav class="navbar navbar-light py-3">
      <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item d-block d-xl-none">
            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="text-nowrap logo-img">
              <img src="assets/images/logos/dark-logo.svg" width="180" alt="" />
            </a>
          </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        </div>
      </div>
    </nav>
  </header>
  <!--  Header End -->
  <div class="container">
    <div class="row my-3">
      <?php foreach($data as $key => $item): ?>
      <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="pemesanan.php?id=<?=$item['id']?>"><img src="assets/images/products/s5.jpg" class="card-img-top rounded-0" alt="..."></a>
            <a href="pemesanan.php?id=<?=$item['id']?>" class="bg-primary rounded p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart">
              Pesan
            </a>
          </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4"><?=$item['nama']?></h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">Rp. <?=number_format($item['harga_jual'], 0, '.', ',')?></h6>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">By Myself</p>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>