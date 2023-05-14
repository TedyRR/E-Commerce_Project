<?php

  function koneksi() {
    return mysqli_connect("localhost","root","","uts_pemrograman_web");
  }

  function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];

    // if(mysqli_num_rows($result) == 1) {
    //   return mysqli_fetch_assoc($result);
    // }

    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }

    return $rows;
  }

  function inputChecker($array){
    return array_map(fn($value): string => htmlspecialchars($value), $array);
  }
?>