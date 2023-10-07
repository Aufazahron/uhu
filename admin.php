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
       
          <h4 class="floating_title">LIST PEMINJAM YANG BELUM DIKEMBALIKAN</h4>  
 
        
        
        <?php
        include "koneksi.php";
        $query = mysqli_query($koneksi, "SELECT * FROM akmw");
        while ($data = mysqli_fetch_array($query)) {
            echo "<ul>";
            echo "<a href='admin.php?id=". $data["id"] ."'><li><p>" . $data["nama"]. "</p><p>" . $data["kelas"]. "</p></li></a>";
            // echo '<button class="btnViewData" data-nama="$data["nama"]">Melihat Data Lengkap (  $data["nama"])</button><br>';
            echo "</ul>";
            
         } 
         ?>
        
      </div>
      <div class="side_button">
            <!-- <a href="index.php" class="back_button_style" id="back0">BACK</a> -->
            <button class="floating-button back" id="back0" onclick="home()"><--</button>
            <button class="floating-button back" id="back1" onclick="page1()"><--</button>
            <!-- <button onclick="checkout()">Checkout</button> -->
        </div>
    </div>

<?php
        include "koneksi.php";
        if ($_GET['id'] > 0) {
          $id = $_GET['id'];
        $tampil = mysqli_query($koneksi, "SELECT * FROM akmw WHERE id='$id'");
        $data = mysqli_fetch_array($tampil); 
        $array_data = explode(",", $data["barang_pinjam"]);
        ?>
  
    <div class="column middle" style="margin: 0; padding: 0;">
      <div class="pmb_main">
        <div class="pmb_biodata" style="overflow-y: scroll;">
            <div class="pmb_biolist">
               <h1>Nama:</h1>
                <h2><?php echo $data["nama"]; ?></h2> 
            </div>
            <div class="pmb_biolist">
               <h1>Kelas:</h1>
                <h2><?php echo $data["kelas"]; ?></h2> 
            </div>
            <div class="pmb_biolist">
               <h1>Keperluan:</h1>
                <h2><?php echo $data["keperluan"]; ?></h2> 
            </div>
            <div class="pmb_biolist">
               <h1>Tanggal Peminjam:</h1>
                <h2><?php echo $data["waktu_pmj"]; ?></h2> 
            </div>
            <div class="pmb_biolist">
               <h1>Tanggal Pengembalian:</h1>
                <h2><?php echo $data["waktu_pmb"]; ?></h2> 
            </div>
            <div class="pmb_biolist">
               <h1>Barang Yang Dipinjam:</h1>
               <h2 ><ul style="text-align: left; "><?php foreach ($array_data as $nilai) {echo "<li>> " . $nilai . "</li>";} ?></ul> </h2>
            </div>
        </div>
    <div class="pmb_foto">
            <h1 style="padding: 0; margin: 0;">Foto Peminjaman</h1>
            <img src="img_peminjaman/<?php echo $data["img_peminjaman"]; ?>" style="transform: scale(0.9); border-radius: 15px; margin-top: 5%;">
            <h1 style="padding: 0; margin: 0;">Foto Pengembalian</h1>
            <img src="img_pengembalian/<?php echo $data["img_pmb"]; ?>" style="transform: scale(0.9); border-radius: 15px; margin-top: 5%;">
        </div>
      </div>
        
  </div>
  
</body>
<script type="text/javascript">
    function home(){
            location.href = "index.php";
        }

    

</script>
<?php 
  }
        else{
           $query = mysqli_query($koneksi, "SELECT * FROM akmw WHERE kondisi = 0");
           while ($data = mysqli_fetch_array($query)) {
            $url = "http://localhost/Abeng2023-v1.0.2/admin.php?id=". $data["id"];
            header("Location: " . $url);
        }
      }
      ?>
</html>
