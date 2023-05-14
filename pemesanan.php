<?php
  require "functions/general.php";
  require "functions/pemesanan.php";
  
  $id = $_GET['id'];
  $data = query("SELECT * FROM produk WHERE id='$id'");
  $produk = $data[0];
  $kategori_id = $produk['kategori_produk_id'];
  $kategori = query("SELECT * FROM kategori_produk WHERE id='$kategori_id'");


  
  $created = false;

  if  (isset($_POST["tambah"])) {
    if(tambah($_POST) > 0){
      $created = true;
      header("location:pemesananBerhasil.php");
    } else {
      $created = false;
    }
  }
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
    <div class="row my-3 d-flex justify-content-center">
      <div class="col-xl-8 col-md-8 col-10">
        <div class="card w-100">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between mb-3">
              <h5 class="card-title fw-semibold">Detail Produk</h5>
            </div>
            <div class="row">
              <div class="col-md-5 col-12">
                <img src="assets/images/products/s5.jpg" class="card-img-top rounded-0 w-100" alt="...">
              </div>
              <div class="col-md-7 col-12 border-left">
                <table class="table">
                  <tr>
                    <td style="width: 20%">Nama</td>
                    <td style="width: 1%">:</td>
                    <td><?=$produk['nama']?></td>
                  </tr>
                  <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td><?=$kategori[0]["nama"]?></td>
                  </tr>
                  <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>Rp. <?=number_format($produk['harga_jual'], 0, ',', '.')?></td>
                  </tr>
                  <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td><?=number_format($produk['stok'], 0, ',', '.')?> Pcs</td>
                  </tr>
                  <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><?=$produk['deskripsi']?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <form action="" method="POST">
              <input type="hidden" name="tanggal" value="<?=date('Y-m-d')?>">
              <input type="hidden" name="produk_id" value="<?=$id?>">
              <div class="mb-3">
                <label for="inputNamaPemesan" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputNamaPemesan" name="nama_pemesan" placeholder="Masukan nama Anda" required>
              </div>
              <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="inputAlamat" name="alamat_pemesan" required>
                </textarea>
              </div>
              <div class="mb-3">
                <label for="inputNoHp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="inputNoHp" name="no_hp" placeholder="cth. 081234567XXX" required>
              </div>
              <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="cth. test@mail.com">
              </div>
              <div class="mb-3">
                <label for="inputJumlahPesanan" class="form-label">Jumlah Pesanan</label>
                <input type="number" class="form-control" id="inputJumlahPesanan" name="jumlah_pesanan" placeholder="cth. 20">
              </div>
              <div class="mb-3">
                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="inputDeskripsi" name="deskripsi_pesanan" required></textarea>
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
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>