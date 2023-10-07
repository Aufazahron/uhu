<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Camera Popup</title>
    <style>
        /* Penyesuaian tampilan */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        video {
            width: 640px;
            height: 480px;
        }
    </style>
</head>
<body>
    <h1>Webcam Capture</h1>
    <video id="video" autoplay></video>
    <button id="capture">Capture</button>
    <button id="closePopup">Close</button>
    
    <script>
        const video = document.getElementById('video');
        const captureButton = document.getElementById('capture');
        const closePopupButton = document.getElementById('closePopup');
        
        navigator.mediaDevices
            .getUserMedia({ video: true })
            .then(function (stream) {
                video.srcObject = stream;
            })
            .catch(function (error) {
                console.error('Error accessing the webcam:', error);
            });
            
        captureButton.addEventListener('click', function () {
            // Mengambil gambar dari webcam dan melakukan sesuatu dengan gambar tersebut
            // Di sini, Anda dapat mengirim gambar ke server atau melakukan tindakan lainnya
            
            // Tutup popup setelah mengambil gambar
            window.close();
        });
        
        closePopupButton.addEventListener('click', function () {
            // Tutup popup tanpa mengambil gambar
            window.close();
        });
    </script>
</body>
</html>
