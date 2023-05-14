<?php

  function tambah($data){
    $conn = koneksi();
    $data = inputChecker($data);
    
    $tanggal = $data['tanggal'];
    $nama_pemesan = $data['nama_pemesan'];
    $alamat_pemesan = $data['alamat_pemesan'];
    $no_hp = $data['no_hp'];
    $email = $data['email'];
    $jumlah_pesanan = $data['jumlah_pesanan'];
    $deskripsi_pesanan = $data['deskripsi_pesanan'];
    $produk_id = $data['produk_id'];

    $query = "INSERT INTO pemesanan VALUES (
      null, 
      '$tanggal',
      '$nama_pemesan',
      '$alamat_pemesan',
      '$no_hp',
      '$email',
      '$jumlah_pesanan',
      '$deskripsi_pesanan',
      '$produk_id'
    );";
    
    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
  }
?>