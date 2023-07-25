<?php
    require_once "control/koneksi.php";
 
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $jenis_pekerjaan = mysqli_real_escape_string($conn, $_POST['jenis_pekerjaan']);
    $tgl_pekerjaan = mysqli_real_escape_string($conn, $_POST['tgl_pekerjaan']);
 
 
    if(mysqli_query($conn, "INSERT INTO laporan(nama, jenis_pekerjaan, tgl_pekerjaan) VALUES('" . $nama . "', '" . $jenis_pekerjaan . "', '" . $tgl_pekerjaan . "')")) {
     echo 'Berhasil Ditambahkan!';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?>