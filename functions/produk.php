<?php

  function tambah($data){
    $conn = koneksi();
    $data = inputChecker($data);

    $kode = $data['kode'];
    $nama = $data['nama'];
    $harga_jual = $data['harga_jual'];
    $harga_beli = $data['harga_beli'];
    $stok = $data['stok'];
    $min_stok = $data['min_stok'];
    $deskripsi = $data['deskripsi'];
    $kategori_produk_id = $data['kategori_produk_id'];
    $query = "INSERT INTO produk VALUES (
      null, 
      '$kode',
      '$nama',
      '$harga_jual',
      '$harga_beli',
      '$stok',
      '$min_stok',
      '$deskripsi',
      '$kategori_produk_id'
    );";
    
    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
  }

  function edit($data, $id){
    $conn = koneksi();
    $data = inputChecker($data);

    
    $kode = $data['kode'];
    $nama = $data['nama'];
    $harga_jual = $data['harga_jual'];
    $harga_beli = $data['harga_beli'];
    $stok = $data['stok'];
    $min_stok = $data['min_stok'];
    $deskripsi = $data['deskripsi'];
    $kategori_produk_id = $data['kategori_produk_id'];
    $query = "UPDATE produk SET 
      kode='$kode',
      nama='$nama',
      harga_jual='$harga_jual',
      harga_beli='$harga_beli',
      stok='$stok',
      min_stok='$min_stok',
      deskripsi='$deskripsi',
      kategori_produk_id='$kategori_produk_id' 
    WHERE id='$id'";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
  }

  function hapus($id){
    $conn = koneksi();

    $query = "DELETE FROM produk WHERE id='$id'";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
  }
?>