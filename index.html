<!DOCTYPE html>
<html lang="en">
<head>
<title>Abeng 2023</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</style>
</head>
<body>

<div class="row">
    <div class="column side">
      <div>
        <h1>PEMINJAMAN ALAT INVENTARIS TKJ</h1>
        <h3>Smk Tamansiswa Rancaekek</h3>
      </div>
      <div class="homelist">
       
          <h4>LIST PEMINJAM HARI INI</h4>  
 
        
        
        <?php
        include "koneksi.php";
        $tanggal_waktu_hari_ini = date("Y-m-d H:i:s");
        // Mengambil tanggal dari tanggal dan waktu saat ini
        $tanggal_hari_ini = date("Y-m-d", strtotime($tanggal_waktu_hari_ini));

        $query = mysqli_query($koneksi, "SELECT * FROM akmw WHERE DATE(waktu_pmj) = '$tanggal_hari_ini'");
        while ($data = mysqli_fetch_array($query)) {
            echo "<ul>";
            
            if ($data["kondisi"] == 0) {
                echo "<li><p>" . $data["nama"]. "</p><p>" . $data["kelas"]. "</p></li>";
            } 
            else {
                echo "<li class='list_pm' style='background-color: green'><p style='color:white'>" . $data["nama"]. "</p><p style='color:white'>" . $data["kelas"]. "</p></li>";
            }
            echo "</ul>";
            
         } 
         ?>
        
      </div>
      <div class="jam-tanggal">
        <p class="clock" id="clock"font-size: 50px;"></p>
        <p class="tgl" id="tgl"></p>
      </div>  
    </div>
  
    <div class="column middle">
      <div class="home_button">
        <a href="peminjaman.php">PEMINJAMAN</a>
        <a href="pengembalian.php">PENGEMBALIAN</a>
      </div>
  </div>
  
  <script>
    setInterval(customClock, 100);
     function customClock() {
         var time = new Date();
         var day = time.getDate();
         var bulan = time.getMonth();
         var bulann = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus','September', 'Oktober', 'November', 'Desember'];
         var tahun = time.getFullYear();
         var hrs = time.getHours();
         var min = time.getMinutes().toString().padStart(2, '0');
         var sec = time.getSeconds().toString().padStart(2, '0');
         
         document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
         document.getElementById('tgl').innerHTML = day + "-" + bulann[bulan] + "-" + tahun;
         
     }

  </script>
  
</body>


</html>
