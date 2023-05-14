<?php
require "../functions/general.php";

$data = query("SELECT
  pm.id,
  pm.nama_pemesan,
  pm.no_hp,
  pro.nama,
  pro.id produk_id
FROM pemesanan pm
LEFT JOIN produk pro ON pm.produk_id=pro.id;");

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-commerce</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
  <!-- Sidebar Start -->
  <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="#" class="text-nowrap logo-img">
          <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Menu</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link active" href="#" aria-expanded="false">
              <span>
                <i class="ti ti-receipt"></i>
              </span>
              <span class="hide-menu">Penjualan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="produk.php" aria-expanded="false">
              <span>
                <i class="ti ti-building-store"></i>
              </span>
              <span class="hide-menu">Produk</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="kategoriProduk.php" aria-expanded="false">
              <span>
                <i class="ti ti-category-2"></i>
              </span>
              <span class="hide-menu">Kategori Produk</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->
  <!--  Main wrapper -->
  <div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item d-block d-xl-none">
            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="nav-item">
          </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        </div>
      </nav>
    </header>
    <!--  Header End -->
    <div class="container-fluid">
      <!--  Row 1 -->
      <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Daftar Pesanan</h5>
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">#</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama Pemesan</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama Produk</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No Hp</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Aksi</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data as $key => $item): ?>
                    <tr>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"><?=$key+1?></h6>
                      </td>
                      <td class="border-bottom-0">
                        <span class="mb-0 fw-normal"><?=$item['nama_pemesan']?></span>
                      </td>
                      <td class="border-bottom-0">
                        <span class="mb-0 fw-normal"><?=$item['nama']?></span>
                      </td>
                      <td class="border-bottom-0">
                        <span class="mb-0 fw-normal"><?=$item['no_hp']?></span>
                      </td>
                      <td class="border-bottom-0">
                        <a href="indexDetail.php?id=<?=$item['id']?>" class="btn btn-warning btn-sm">
                          <i class="ti ti-eye"></i> Detail
                        </a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">By Myself</p>
      </div>
    </div>
  </div>
</div>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.js"></script>
<script src="../assets/js/dashboard.js"></script>
</body>

</html>