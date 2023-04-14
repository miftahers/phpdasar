<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Ini Komentar
// Ini Komentar 2

/*
Ini merupakan komentar multi baris,
1. Baris satu
2. Baris dua
*/

// Standar Output
// echo, print
// print_r (Untuk print array)
// var_dump

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Firdaus";
?>
<!-- Php dalam HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="markdown-body">
        <h2>Pertemuan 2 - Sintaks PHP</h2>
        <?php
        echo "<h2>Print</h2>";
        echo "echo Miftah Firdaus";
        echo "<br>";
        print "print Miftah Firdaus";
        echo "<br>";
        echo "var_dump(Miftah Firdaus) = ";
        var_dump("Miftah Firdaus");
        echo "<br>";
        echo "echo true = " . true;
        echo "<br>";
        echo "echo false = " . false;
        echo "<br>";
        echo "echo 123 = " . 123;
        echo "<br>";
        echo "'" . 'echo "Wow!"' . "' = " . '"Wow!"';
        ?>

        <h2>Halo, Selamat Datang
            <?php $nama = "Miftah";
            echo $nama; ?>
        </h2>
        <p>
            <?php echo "ini adalah paragraf" ?>
        </p>

        <?php
        // HTML dalam PHP
        echo "<h2>Halo, Selamat Datang Miftah</h2>";
        ?>

        <?php
        // Operator
        // aritmatika
        $x = 10;
        $y = 20;
        $jml = $x + $y;

        echo "<h2>Operator aritmatika ( +, -, *, /, % )</h2>";
        echo "<p>Variabel x = $x</p>";
        echo "<p>Variabel y = $y</p>";
        echo "<p>x + y = $jml</p>";
        ?>

        <?php
        // penggabung string / concatenation / concat
        // .
        $namaDepan = "Miftah";
        $namaBelakang = "Firdaus";
        echo "<h2>Concat / Penggabung String</h2>";
        echo 'echo "Nama:" . " " . $namaDepan . " " . $namaBelakang ' . " = ";
        echo "Nama:" . " " . $namaDepan . " " . $namaBelakang;
        echo "<br>";
        ?>

        <?php
        echo "<h2>Assignment</h2>";
        echo "<p>=, +=, -=, *=, /=, .=</p>";
        echo "<h3>Assignment '-='</h3>";
        $x = 1;
        echo "<p>x = $x;</p>";
        $x -= 5;
        echo "<p>x -= 5; x: $x";
        $x *= -10;
        echo "<h3>Assignment '*='</h3>";
        echo "<p>x *= -10; x: $x</p>";
        echo "<h3>Assignment '.='</h3>";
        $namaDepan = "Miftah";
        $namaBelakang = "Firdaus";
        echo "<p>namaDepan = 'Miftah';</p>";
        echo "<p>namaBelakang = 'Firdaus';</p>";
        $nama = "";
        $nama .= $namaDepan;
        $nama .= " ";
        $nama .= $namaBelakang;
        echo "<p>nama .= namaDepan;</p>";
        echo "<p>nama .= ' ';</p>";
        echo "<p>nama .= namaBelakang;</p>";
        echo "<p>nama = $nama</p>";
        ?>

        <?php
        echo "<h2>Perbandingan (Tidak mengecek tipe data)</h2>";
        echo "<, >, <=, >=, ==, !=";
        echo "<p>var_dump(1 < 5) = ";
        var_dump(1 < 5);
        echo "</p>";
        echo "<p>var_dump(1 == '5') = ";
        var_dump(1 == "5");
        echo "</p>";
        echo "<p>var_dump(1 == '1') = ";
        var_dump(1 == "1");
        echo "</p>";
        ?>

        <?php
        echo "<h2>Identitas (Membandingkan juga tipe datanya)</h2>";
        echo "===, !==";
        echo "<p>var_dump(1 === '1') = ";
        var_dump(1 === "1");
        echo "</p>";
        ?>

        <?php
        echo "<h2>Logika</h2>";
        echo "<p>&&, ||, !</p>";
        echo '<h3>Logika &&</h3>';
        $x = 10;
        echo '<p>$x = 10;</p>';
        echo '<p>var_dump($x < 20 && $x % 2 == 0) = ';
        var_dump($x < 20 && $x % 2 == 0);
        echo "</p>";
        $x = 30;
        echo '<p>$x = 30;</p>';
        echo '<p>var_dump($x < 20 && $x % 2 == 0) = ';
        var_dump($x < 20 && $x % 2 == 0);
        echo "</p>";
        $x = 30;

        echo '<h3>Logika ||</h3>';
        echo '<p>$x = 30;</p>';
        echo '<p>var_dump($x < 20 || $x % 2 == 0) = ';
        var_dump($x < 20 || $x % 2 == 0);
        echo "</p>";
        ?>
    </div>
</body>

</html>