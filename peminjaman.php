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
        <div class="header">
            <h1>PEMINJAMAN ALAT INVENTARIS TKJ</h1>
            <h3>Smk Tamansiswa Rancaekek</h3>
        </div>
        <div class="list">
            <h4>LIST BARANG</h4>
            <ul id="keranjang"></ul>

        </div>

        <div class="side_button">
            <!-- <a href="index.php" class="back_button_style" id="back0">BACK</a> -->
            <button class="floating-button back" id="back0" onclick="home()"><--</button>
            <button class="floating-button back" id="back1" onclick="page1()"><--</button>
            <button onclick="page2()" class="floating-button next" id="nextbtn">BERIKUTNYA ></button>
            <button onclick="checkout()" class="floating-button next" id="chkbtn" style="background-color: #29ba09  ;">PINJAM</button>
            <!-- <button onclick="checkout()">Checkout</button> -->
        </div>
        
    </div>

    <div class="column middle">
        <div class="product" id="myForm">
            <div class="cart">
                <img class="img" src="./Img/Proyektor.png" alt="avatar" style="width: 100%">
                <div class="container">
                <h2>Proyektor</h2>
                <button class="button" onclick="tambahKeKeranjang('Proyektor')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Colokan.jpg" alt="avatar" style="width: 208px; height: 143px;">
                <div class="container">
                <h2>Colokan</h2>
                <button class="button" onclick="tambahKeKeranjang('Colokan')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Headset.jpeg" alt="avatar" style="width: 100%; height: 143px;">
                <div class="container">
                <h2>Headset</h2>
                <button class="button" onclick="tambahKeKeranjang('Headset')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Monitor.jpeg" alt="avatar" style="width: 100%; height: 143px;">
                <div class="container">
                <h2>Monitor</h2>
                <button class="button" onclick="tambahKeKeranjang('Monitor')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Keyboard.jpeg" alt="avatar" style="width: 100%; height: 143px;">
                <div class="container">
                <h2>Keyboard</h2>
                <button class="button" onclick="tambahKeKeranjang('Keyboard')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Obeng.jpeg" alt="avatar" style="width: 100%; height: 143px;">
                <div class="container">
                <h2>Obeng</h2>
                <button class="button" onclick="tambahKeKeranjang('Obeng')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Speaker.jpeg" alt="avatar" style="width: 100%; height: 143px;">
                <div class="container">
                <h2>Speaker</h2>
                <button class="button" onclick="tambahKeKeranjang('Speaker')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Sapu.jpeg" alt="avatar" style="width: 100%; height: 143px;">
                <div class="container">
                <h2>Sapu</h2>
                <button class="button" onclick="tambahKeKeranjang('Sapu')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Pelan.jpeg" alt="avatar" style="width: 100%; height: 143px;">
                <div class="container">
                <h2>Lap-Pel</h2>
                <button class="button" onclick="tambahKeKeranjang('Lap-pel')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Solder.jpeg" alt="avatar" style="width: 100%; height: 143px;">
                <div class="container">
                <h2>Solder</h2>
                <button class="button" onclick="tambahKeKeranjang('Solder')">Tambah Keranjang</button>
                </div>
            </div>
            <div class="cart">
                <img class="img" src="./Img/Timah.jpeg" alt="avatar" style="width: 100%; height: 143px;">
                <div class="container">
                <h2>Timah Solder</h2>
                <button class="button" onclick="tambahKeKeranjang('Timah-Solder')">Tambah Keranjang</button>
                </div>
            </div>
        </div>
         <div class="divform" >
                <form action="post" id="part2" style="display: none;" class="form">
                    <div class="formdalem">
                        <h1>DATA DIRI</h1>
                        <label>NAMA</label>
                    <input type="text" id="nama" placeholder="Masukan Nama Anda | Contoh : Aufa" required>
                    <label>KELAS</label>
                    <input type="text" id="kelas" placeholder="Masukan Kelas | Contoh : XII TJKT" required>
                    <label>KEPERLUAN</label>
                    <input type="text" id="keperluan" placeholder="Keperluan | Contoh : Kimia"required>
                    <input type="hidden" name="" >
                    </div>
                </form>
                <div class="camver" id="camverpart2" style="display:none;">
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
    </div>
  
   
  <script type="text/javascript">
        function home(){
            location.href = "index.php";
        }
        function page1() {
        document.getElementById("myForm").style.display = "";
        document.getElementById("back0").style.display = "block";
        document.getElementById("part2").style.display = "none";
        document.getElementById("camverpart2").style.display = "none";
        document.getElementById("back1").style.display = "none";
        document.getElementById("nextbtn").style.display = "block";
        document.getElementById("chkbtn").style.display = "none";
        }

        function page2() {
        document.getElementById("myForm").style.display = "none";
        document.getElementById("back0").style.display = "none";
        document.getElementById("nextbtn").style.display = "none";
        document.getElementById("chkbtn").style.display = "block";
        document.getElementById("part2").style.display = "block";
        document.getElementById("camverpart2").style.display = "block";
        document.getElementById("back1").style.display = "block";


        }
      var keranjang = {}; 

        function tambahKeKeranjang(namaProduk) {
            if (keranjang[namaProduk]) {
            } 
            else {
                keranjang[namaProduk] = "";
            }
            updateKeranjang();
        }
        function hapusDariKeranjang(namaProduk) {
                if (keranjang[namaProduk] == 0) {
                    delete keranjang[namaProduk];
                
            }

            updateKeranjang();
        }

        function updateKeranjang() {
            var keranjangElem = document.getElementById("keranjang");
            keranjangElem.innerHTML = "";

            for (var namaProduk in keranjang) {
                var jumlah = keranjang[namaProduk];
                keranjangElem.innerHTML += `
                    <li>
                        ${namaProduk} 
                        <button class="hapus" onclick="hapusDariKeranjang('${namaProduk}')">Hapus</button>
                    </li>
                `;
            }
        }

        function checkout() {
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
    xhr.open("POST", "proses.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

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
    var h = date.getHours().toString().padStart(2, '0');
    var m = date.getMinutes().toString().padStart(2, '0');

    var tglfoto = day + '-' + bulann[bulan] + '-' + tahun + '-' + h + '.' + m;

    var awah = document.getElementById('resultPhoto').src;
    var keranjangData = JSON.stringify(keranjang);
    const nama = document.getElementById('nama').value;
    const kelas = document.getElementById('kelas').value;
    const keperluan = document.getElementById('keperluan').value;

    let keranjangdatafix = keranjangData.replace(/{|}|"|:/g, '');
    xhr.send("keranjang=" + keranjangdatafix + "&nama=" + encodeURIComponent(nama) + "&kelas=" + encodeURIComponent(kelas) +"&keperluan=" +encodeURIComponent(keperluan) + "&imageData=" + encodeURIComponent(base64String) + "&tglfoto=" + tglfoto + "");
    alert("Barang Telah Dipinjam, Jangan Lupa Kembalikan");
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

        // Fungsi untuk mengirim foto ke server
        function sendToServer(imageData) {
            const userName = userNameInput.value;
            const currentDate = new Date().toISOString().slice(0, 10);
            
            // Menggunakan XMLHttpRequest untuk mengirim data ke server
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'upload.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            // Data yang akan dikirimkan
            const data = `imageData=${encodeURIComponent(imageData)}&userName=${encodeURIComponent(userName)}&currentDate=${encodeURIComponent(currentDate)}`;
            
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            
            // // Mengirim data
            // xhr.send(data);
        }
  </script>
  
</body>
</html>
