<?php
require "../functions/general.php";

$id = $_GET['id'];
$data = query("SELECT
  *,
  pro.id produk_id,
  pm.id pemesanan_id,
  pm.deskripsi deskripsi_pesanan
FROM pemesanan pm
LEFT JOIN produk pro ON pm.produk_id=pro.id
WHERE pm.id='$id'
LIMIT 1
;");

$pemesanan = $data[0];

$produk_id = $data[0]['produk_id'];
$data_produk = query("SELECT * FROM produk WHERE id='$produk_id'");
$produk = $data_produk[0];

$kategori_id = $produk['kategori_produk_id'];
$data_kategori = query("SELECT nama FROM kategori_produk WHERE id='$kategori_id'");
$kategori = $data_kategori[0];
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
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
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
              <a class="sidebar-link active" href="index.php" aria-expanded="false">
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
              <a class="sidebar-link" href="#" aria-expanded="false">
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
          <div class="col-12">
            <a href="index.php" class="btn btn-secondary mb-3">
              <i class="ti ti-arrow-left"></i> Kembali
            </a>
          </div>
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="d-flex justify-content-between mb-3">
                  <h5 class="card-title fw-semibold">Detail Pesanan</h5>
                </div>
                <div class="row">
                  <div class="col-lg-5 col-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="fw-bold text-center">
                          <?=$produk['nama']?> (<?=$kategori["nama"]?>)
                        </h5>
                        <h6 class="text-center fw-bold">Rp. <?=number_format($produk['harga_jual'], 0, ',', '.')?></h6>
                        <img src="../assets/images/products/s5.jpg" class="card-img-top rounded-0 w-100" alt="...">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7 col-12 border-left">
                    <table class="table">
                      <tr>
                        <td style="width: 20%">Nama Pemesan</td>
                        <td style="width: 1%">:</td>
                        <td><?=$pemesanan["nama_pemesan"]?></td>
                      </tr>
                      <tr>
                        <td>Alamat Pemesan</td>
                        <td>:</td>
                        <td><?=$pemesanan["alamat_pemesan"]?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Pesanan</td>
                        <td>:</td>
                        <td><?=$pemesanan["tanggal"]?></td>
                      </tr>
                      <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td><?=$pemesanan["no_hp"]?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?=$pemesanan["email"]?></td>
                      </tr>
                      <tr>
                        <td>Jumlah Pesanan</td>
                        <td>:</td>
                        <td><?=number_format($pemesanan['jumlah_pesanan'], 0, ',', '.')?> Pcs</td>
                      </tr>
                      <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td><?=$pemesanan['deskripsi_pesanan']?></td>
                      </tr>
                    </table>
                  </div>
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
