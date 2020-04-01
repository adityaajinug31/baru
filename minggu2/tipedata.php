<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar tipedata</title>
</head>
<body>
    <?php
        $nim = "A22.2019.02756";
        $nama = "Aditya Ajie Nugroho";
        $umur = "19";
        $nilai = "95.25";
        $status = "true";
        echo "NIM : ".$nim . "<br>";
        echo "Nama : $nama<br>";
        print "Umur : ". $umur; print "<br>";
        printf("Nilai : %.2f<br>", $nilai);
        if ($status)
        echo "Status : Aktif";
        else
        echo "Status : Tidak AKtif";
    
    ?>
</body>
</html>