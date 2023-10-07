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
        $query = mysqli_query($koneksi, "SELECT * FROM akmw WHERE kondisi = 0");
        while ($data = mysqli_fetch_array($query)) {
            echo "<ul>";
            echo "<a href='pengembalian.php?id=". $data["id"] ."'><li><p>" . $data["nama"]. "</p><p>" . $data["kelas"]. "</p></li></a>";
            // echo '<button class="btnViewData" data-nama="$data["nama"]">Melihat Data Lengkap (  $data["nama"])</button><br>';
            echo "</ul>";
            
         } 
         ?>
        
      </div>
      <div class="side_button">
            <!-- <a href="index.php" class="back_button_style" id="back0">BACK</a> -->
            <button class="floating-button back" id="back0" onclick="home()"><--</button>
            <button class="floating-button back" id="back1" onclick="page1()"><--</button>
            <button onclick="balikin()" class="floating-button next" style="background-color: #29ba09;">KEMBALIKAN</button>
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
               <h1>Barang Yang Dipinjam:</h1>
               <h2 ><ul style="text-align: left; "><?php foreach ($array_data as $nilai) {echo "<li>> " . $nilai . "</li>";} ?></ul> </h2>
            </div>
        </div>
        <div class="pmb_foto">
            <img src="img_peminjaman/<?php echo $data["img_peminjaman"]; ?>" style="transform: scale(0.9); border-radius: 15px; margin-top: 5%;">
              <div class="camver" id="camverpart2" style="padding-top: 0;">
                    <div class="campreview">
                        <h1 style="color:black;">VERIFIKASI FOTO</h1>
                        <div id="resultContainer" class="camverprev">
                            <img id="resultPhoto" src="">
                        </div>
                        <button id="openCamera" class="cambutton">BUKA KAMERA</button>
                    </div>
                    </div>
    <!-- Popup untuk kamera -->
                    <div id="cameraPopup" class="popup-container">
                        <div class="popup">
                            <h1 style="color:black; margin: 0;">VERIFIKASI FOTO (Harap Tunggu)</h1>
                            <video id="video" autoplay></video>
                            <div class="popupbtn">
                                <button id="capture" style="background-color: #609966;">AMBIL GAMBAR</button>
                                <button id="closePopup">KELUAR</button>
                            </div>
                        </div>
                    </div>

                </div>
    
      </div>
        
  </div>
  
</body>
<script type="text/javascript">
    function home(){
            location.href = "index.php";
        }

    
    function balikin() {
            let text = "Apakah Anda Yakin?\nPeriksa Kembali Barang Yang Anda Pinjam";
            if (confirm(text) == true) {
            text = "You pressed OK!";
                var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle respons dari PHP setelah data berhasil disimpan
            var response = xhr.responseText;
        }
    };
    xhr.open("POST", "proses_pmb.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Kirim data keranjang belanja ke PHP
    // var fotocuy = canvasElement.toDataURL('image/png');  
    // var ajg = canvasElement.toDataURL('image/png');

    const gambar = document.getElementById('resultPhoto'); // Ganti 'tampilGambar' dengan ID elemen gambar Anda
    const canvas = document.createElement('canvas');
    const context = canvas.getContext('2d');

    canvas.width = gambar.width;
    canvas.height = gambar.height;

    context.drawImage(gambar, 0, 0, gambar.width, gambar.height);

    const base64String = canvas.toDataURL('image/png'); // Ganti 'image/jpeg' sesuai dengan format gambar yang Anda inginkan



    var date = new Date();
    var day = date.getDate();
    var bulan = date.getMonth();
    var bulann = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus','September', 'Oktober', 'November', 'Desember'];
    var tahun = date.getFullYear();
    var h = date.getHours().toString().padStart(2, '0');;
    var m = date.getMinutes().toString().padStart(2, '0');;

    var tglfoto = day + '-' + bulann[bulan] + '-' + tahun + '-' + h + '.' + m;

    var awah = document.getElementById('resultPhoto').src;

    xhr.send("id=" + <?php echo $data["id"]; ?> +"&imageData=" + encodeURIComponent(base64String) + "&tglfoto=" + tglfoto + "&nama=" + "" + "&kelas=" + "" + "");
    alert("Barang Telah Dikembalikan, Terima Gaji");
    location.href = "index.php";
            } 
            else {
            text = "You canceled!";
            }
        // var datasend = JSON.stringify(keranjang);
        //     alert("oawkowkko");

    // Kirim data keranjang belanja ke PHP menggunakan AJAX
    
}

    // camera Webcam
// Mendapatkan elemen-elemen DOM
        const openCameraButton = document.getElementById('openCamera');
        const retryButton = document.getElementById('retry');
        const resultContainer = document.getElementById('resultContainer');
        const resultPhoto = document.getElementById('resultPhoto');
        const cameraPopup = document.getElementById('cameraPopup');
        const video = document.getElementById('video');
        const captureButton = document.getElementById('capture');
        const closePopupButton = document.getElementById('closePopup');
        const userNameInput = document.getElementById('userName');

        let stream;

        // Event listener untuk tombol Open Camera
        openCameraButton.addEventListener('click', function () {
            // Membuka popup untuk kamera
            cameraPopup.style.display = 'flex'; // Menggunakan flex
            centerPopup();
            
            navigator.mediaDevices
                .getUserMedia({ video: true })
                .then(function (userStream) {
                    stream = userStream;
                    video.srcObject = stream;
                })
                .catch(function (error) {
                    console.error('Error accessing the webcam:', error);
                });
        });

        // Event listener untuk tombol Close pada popup
        closePopupButton.addEventListener('click', function () {
            // Menutup popup dan menghentikan penggunaan webcam
            cameraPopup.style.display = 'none';
            if (stream) {
                const tracks = stream.getTracks();
                tracks.forEach(track => track.stop());
            }
        });

        // Event listener untuk tombol Capture pada popup
        captureButton.addEventListener('click', function () {
            cameraPopup.style.display = 'none';
            // Mengambil gambar dari webcam dan menampilkannya di halaman utama
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            resultPhoto.setAttribute('src', canvas.toDataURL('image/png'));

            // Menampilkan hasil foto dan tombol retry di halaman utama
            resultContainer.style.display = 'block';
            retryButton.style.display = 'block';

            // Tutup popup dan menghentikan penggunaan webcam
            cameraPopup.style.display = 'none';
            if (stream) {
                const tracks = stream.getTracks();
                tracks.forEach(track => track.stop());
            }
            
            // Mengirim foto ke server menggunakan fungsi sendToServer
            sendToServer(canvas.toDataURL('image/png'));
        });

        // Event listener untuk tombol retry
        retryButton.addEventListener('click', function () {
            // Menyembunyikan hasil foto dan tombol retry
            resultContainer.style.display = 'none';
            retryButton.style.display = 'none';

            // Mengembalikan tampilan ke semula
            openCameraButton.style.display = 'block';
        });

        // Fungsi untuk mengatur posisi popup di tengah layar
        function centerPopup() {
            const popup = document.querySelector('.popup');
            const windowHeight = window.innerHeight;
            const popupHeight = popup.clientHeight;
            const top = (windowHeight - popupHeight) / 2;
            popup.style.top = top + 'px';
        }

</script>
<?php 
  }
        else{
          echo "<h1> wkwk</h1>";
           // $query = mysqli_query($koneksi, "SELECT * FROM akmw WHERE kondisi = 0");
           // while ($data = mysqli_fetch_array($query)) {
            $url = "http://localhost/Abeng2023-v1.0.2/pengembalian.php?id=1";
            header("Location: " . $url);
          
      }
      ?>
</html>
