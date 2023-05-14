<?php

require "../functions/general.php";
require "../functions/produk.php";
$edited = false;
$kategori = query("SELECT * FROM kategori_produk");

$id = $_GET['id'];
$data = query("SELECT * FROM produk WHERE id='$id'");
$produk = $data[0];
$kategori_id = $produk['kategori_produk_id'];

if  (isset($_POST["tambah"])) {
  if(edit($_POST, $id) > 0){
    $edited = true;
  } else {
    $edited = false;
  }
}


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
              <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-receipt"></i>
                </span>
                <span class="hide-menu">Penjualan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link active" href="produk.php" aria-expanded="false">
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
            <a href="produk.php" class="btn btn-secondary mb-3">
              <i class="ti ti-arrow-left"></i> Kembali
            </a>
          </div>
          <div class="col-12">
            <?php if($edited): ?>
            <div class="alert alert-success">
              <h6 class="mb-0 text-success">Edit produk berhasil.</h6>
            </div>
            <?php endif ?>
          </div>
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="d-flex justify-content-between mb-3">
                  <h5 class="card-title fw-semibold">Edit Produk</h5>
                </div>
                <form action="" method="POST">
                  <div class="mb-3 w-50">
                    <label for="selectKategori" class="form-label">Pilih Kategori Produk</label>
                    <select class="form-control" id="selectKategori" name="kategori_produk_id" required>
                      <?php foreach($kategori as $item): ?>
                      <option value="<?=$item['id']?>" <?= ($item['id'] == $kategori_id) ? "selected":false ?>><?=$item['nama']?></option>
                      <?php endforeach?>
                    </select>
                  </div>
                  <div class="mb-3 w-50">
                    <label for="inputKode" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="inputKode" name="kode" value="<?=$produk['kode']?>" placeholder="cth. A0001" required>
                  </div>
                  <div class="mb-3 w-50">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNama" name="nama" value="<?=$produk['nama']?>" placeholder="cth. Macbook Pro M2" required>
                  </div>
                  <div class="mb-3 w-50">
                    <label for="inputHargaJual" class="form-label">Harga Jual (Rp)</label>
                    <input type="number" class="form-control" id="inputHargaJual" name="harga_jual" value="<?=$produk['harga_jual']?>" required>
                  </div>
                  <div class="mb-3 w-50">
                    <label for="inputHargaBeli" class="form-label">Harga Beli (Rp)</label>
                    <input type="number" class="form-control" id="inputHargaBeli" name="harga_beli" value="<?=$produk['harga_beli']?>" required>
                  </div>
                  <div class="mb-3 w-50">
                    <label for="inputStok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="inputStok" name="stok" value="<?=$produk['stok']?>" required>
                  </div>
                  <div class="mb-3 w-50">
                    <label for="inputMinStok" class="form-label">Min Stok</label>
                    <input type="number" class="form-control" id="inputMinStok" name="min_stok" value="<?=$produk['min_stok']?>" required>
                  </div>
                  <div class="mb-3 w-50">
                    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="inputDeskripsi" name="deskripsi" required><?=$produk['deskripsi']?>
                    </textarea>
                  </div>
                  <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                </form>
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