<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pertemuan 3</title>
</head>

<body>
  <?php
    echo "<h2>Belajar Web Programing</h2>";
    echo ("Selamat Belajar<br>");
    echo "Saya Sedang Belajar Web Programing<br>";
    echo "Nama", "Saya", "Siti", "Nuraini";
    ?>

  <?php
    print "<h2>Belajar Web Programing</h2>";
    print "Selamat Belajar<br>";
    print "Belajar Web Programing";
    ?>

  <?php
    $namadepan = "Siti";
    $namablkg = "Nuraini";
    $ttl = "Tangerang, 26-03-2001";
    $jeniskelamin = "Perempuan";
    $agama = "Islam";
    $fakultas = "Teknik Informatika";
    $mk = "Web Programing";
    $hobi = "Snorkeling and Renang";
    $alamat = "Perumahan Keroncong Permai";
    $hp = "089665972195";
    ?>

  <h4>Indentitas diri</h4>
  <p>Nama : <?php echo $namadepan . " " . $namablkg; ?></p>
  <p>Tanggal Lahir : <?php echo (26032001); $ttl; ?></p>
  <p>Jenis Kelamin : <?php echo $jeniskelamin; ?></p>
  <p>Agama : <?php echo $agama; ?></p>
  <p>Fakultas : <?php echo $fakultas; ?></p>
  <p>Mata Kuliah : <?php echo $mk; ?></p>
  <p>Hobi : <?php echo $hobi; ?></p>
  <p>Alamat : <?php echo $alamat; ?></p>
  <p>Hp : <?php echo $hp; ?></p>
</body>

</html>