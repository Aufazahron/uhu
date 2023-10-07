<?php 
include 'koneksi.php';

$nama= $_POST['nama'];
$kelas= $_POST['kelas'];
$keperluan= $_POST['keperluan'];
$keranjang= $_POST['keranjang'];
$imageData = $_POST['imageData'];
$tglfoto = $_POST['tglfoto'];
$ngeng = $tglfoto . $nama . $kelas . '.png';
// $keperluan= $_POST['keperluan'];



define('UPLOAD_DIR', 'img_peminjaman/');
    $img = $_POST['imageData'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . $tglfoto . $nama . $kelas . '.png';
    $success = file_put_contents($file, $data);

    $query="INSERT INTO akmw SET nama='$nama', kelas='$kelas', keperluan='$keperluan', barang_pinjam='$keranjang', img_peminjaman='$ngeng', img_pmb='', waktu_pmb='', kondisi='0', waktu_pmj=CURRENT_TIMESTAMP";
    // $query = "INSERT INTO auah(nama, kelas, keranjang) SET ('$nama', '$kelas', '$keranjang')"
    mysqli_query($koneksi, $query);
 ?>