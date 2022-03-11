<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Fungsi</title>
</head>
<body>
    <?php
        function kenalan($nama, $salam, $prodi, $NIM){
            echo $salam." ... <br>";
            echo "Perkenalkan, nama saya ".$nama." dengan NIM ".$NIM."<br/>";
            echo "Saya berasal dari Program Studi ".$prodi."<br/>";
        }

        // pemanggilan pertama 
        kenalan("Ahmad", "Selamat Pagi", "Teknik Informatika", "190041110020");
        
        // pemanggilan kedua
        echo "<hr>";
        kenalan("Fauzi", "Selamat Malam", "Psikologi", "2004121000021");

        // pemanggilan ketiga
        echo "<hr>";
        kenalan("Oja", "Selamat Siang", "Argoteknologi", "180013380001");
    ?>
</body>
</html>