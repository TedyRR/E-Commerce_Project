
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-commerce</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <style>
    .img-success {
      width: 50%;
      height: auto;
      object-fit: scale-down;
    }
  </style>
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
    <div class="row my-3 d-flex justify-content-center">
      <div class="col-xl-8 col-md-8 col-10">
        <a href="index.php" class="btn btn-primary mb-3">
          <i class="ti ti-arrow-left"></i> Kembali
        </a>
        <div class="card">
          <div class="card-body py-5 d-flex flex-column justify-content-center align-items-center">
            <img src="assets/images/order-completed.png" alt="" class="img-success">
            <h2 class="fw-bold text-center">Pemesanan Berhasil!</h2>
          </div>
        </div>
      </div>
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