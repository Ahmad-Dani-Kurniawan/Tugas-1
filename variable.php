<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat variable</title>
</head>
<body>
    <?php
        $a1 = "8";
        $a2 = "2";
        $a3 = "12";
        $a4 = "4";

        $jumlah = $a1 + $a4;
        $kurang = $a3 - $a2;
        $kali = $a1 * $a2;

        echo "Hasil penjumlahan dari $a1 + $a4 ... <br>";
        echo "adalah ".$jumlah."<br/>";

        echo "Hasil pengurangan dari $a3 - $a2 ... <br>";
        echo  "adalah ".$kurang."<br/>";

        echo "Hasil perkalian dari $a1 * $a2 ... <br>";
        echo "adalah ".$kali."<br/>";
    ?>
</body>
</html>