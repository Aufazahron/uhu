<?php
    include "koneksi.php";
    $id = $_POST['id'];
    $nama= $_POST['nama'];
    $kelas= $_POST['kelas'];
    $tglfoto = $_POST['tglfoto'];
    $ngeng = $tglfoto . $nama . $kelas . '.png';

    define('UPLOAD_DIR', 'img_pengembalian/');
    $img = $_POST['imageData'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . $tglfoto . $nama . $kelas . '.png';
    $success = file_put_contents($file, $data);

    // mysqli_query($koneksi, "UPDATE akmw SET img_pmb='$img_pmb', kondisi='1', waktu_pmb=CURRENT_TIMESTAMP" WHERE id='$id' ");

    $query="UPDATE akmw SET img_pmb='$ngeng', kondisi='1', waktu_pmb=CURRENT_TIMESTAMP WHERE id='$id'";
    mysqli_query($koneksi, $query);
?>