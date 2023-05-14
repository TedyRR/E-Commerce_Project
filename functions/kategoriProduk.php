<?php

  function tambah($data){
    $conn = koneksi();
    $data = inputChecker($data);

    $nama = $data['nama'];
    $query = "INSERT INTO kategori_produk VALUES (null, '$nama');";
    
    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
  }

  function edit($data, $id){
    $conn = koneksi();
    $data = inputChecker($data);

    $nama = $data['nama'];
    $query = "UPDATE kategori_produk SET nama='$nama' WHERE id='$id'";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
  }

  function hapus($id){
    $conn = koneksi();

    $query = "DELETE FROM kategori_produk WHERE id='$id'";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
  }
?>