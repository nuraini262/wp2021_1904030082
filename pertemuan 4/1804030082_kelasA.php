<!DOCTYPE html>
<html>

<head>
  <title>Pertemuan 4</title>
</head>

<body>
  <h2>Siti Nuraini <br></h2>

  <h1>Membuat Array</h1>
  <?php
    $values = array(1,2,3,4,5,60);
    var_dump($values);
    echo"<br>";
    echo($values[4]);
    
    echo"<br>";

    $prodi = ["T.Sipil","T.Industri","T.Informatika","T.Kimia"];
    var_dump($prodi);
    echo"<br>";
    echo "$prodi[3]";

    echo"<br>";
    //mengganti isi value
    $prodi[0] = "T.Nuklir";
    var_dump($prodi);
    echo"<br>";

    //menambahkan value
    $prodi[] = "T.Komputer";
    var_dump($prodi);
    echo"<br>";

    //menghapus salah satu value
    unset($prodi[0]);
    var_dump($prodi);
    echo"<br>";

    // menghitung total array
    echo"<br>";
    var_dump(count($prodi));

    ?>

  <hr>
  <h1>Map Dengan Array</h1>
  <?php
    $siti = array(
        "id" => "Siti",
        "nama" => "Siti Nuraini",
        "umur" => "21"
    );
    var_dump($siti);
    echo"<br>";

    $nuraini = [
        "id" => "Nuraini",
        "nama" => "Siti Nuraini",
        "umur" => "21",
        "alamat" => [
            "kota" => "Tangerang",
            "Prov" => "Banten"
            ]
    ];
    var_dump($nuraini);

    // echo"<br>";
    // echo("Nama Id :" . $nuraini["id"]);
    // echo"<br>";
    // echo("Nama Lengkap :" . $nuraini["nama"]);
    // echo"<br>";
    // echo("Umur :" . $nuraini["umur"]);
    // echo"<br>";
    // echo("Alamat :" . $nuraini["alamat"]);

    ?>

  <hr>
  <h1>Operator Matematika</h1>

  <?php
    $tambah = 10 + 10;
    $kurang = 100 - 10;
    $kali = 5 * 5;
    $bagi = 50 / 10;
    $modular = 100 % 3;
    $pangkat = 4 ** 3;

    echo "Tambah    : " . $tambah . "<br>";
    echo "Kurang    : " . $kurang . "<br>";
    echo "Kali      : " . $kali . "<br>";
    echo "Bagi      : " . $bagi . "<br>";
    echo "Modular   : " . $modular . "<br>";
    echo "Pangkat   : " . $pangkat . "<br>";
    ?>

  <hr>
  <h1>Increment</h1>
  <?php
    $a = 10;
    $a++;
    // $a = $a + 1;
    $a++;
    // Decrement
    $a--;

    echo($a);
    ?>

  <hr>
  <?php
    $nama1= "Siti Nuraini";
    $nama2= "Jupirnia Waruwu";
    $nama3= "Anisa Azizatul";
    $nama4= "Anisa Nurul";
    $nama5= "Anisa Habibah";
    ?>

  <h1>Daftar Nama Anggota Kelas</h1>

  <?php echo "$nama1";?><br>
  <?php echo "$nama2";?><br>
  <?php echo "$nama3";?><br>
  <?php echo "$nama4";?><br>
  <?php echo "$nama5";?><br>

  <hr>
  <h1>Membuat Array di PHP</h1>
  <?php
    // membuat array kosong
    $array1 = array("elemen","elemen");//cara dibawah php 5
    $array2 = ["elemen","elemen"];//diatas php 5

    //membuat array sekaligus mengisinya
    $minuman = array("Cappucino", "Kopi", "Es Cream");
    $makanan = array("Seafood", "Ayam Goreng", "Nasi Goreng");
    ?>

  <?php
    var_dump($minuman);
    ?>

  <?php
    print_r($makanan);
    ?>

  <?php
    echo "$makanan[0]";
    ?>

  <hr>
  <?php
    // membuat array mhs
        $nama= ["Siti Nuraini","Jupirnia Waruwu","Anisa Azizatul","Anisa Nurul","Anisa Habibah"];
    ?>

  <?php
    // menampilkan isi array perulangan for
    for($i=0; $i < count($nama); $i++){
        echo $nama[$i]."<br>";
    }
    ?>

  <hr>
  <?php
    //membuat array kumpulan buku
    $books= ["Belajar Web Programming","Desainer Grafis dengan Vektor","Kursus 2 Jam HTML"];

    // menampilkan isi array dengan perulangan foreach
    foreach($books as $book){
        echo $book."<br>";
    }
    ?>

  <hr>
  <h1>Menambahkan Array</h1>
  <?php
    // membuat array
    $hobi = [
     	"Mendengarkan Musik",
     	"Membaca",
     	"Olahraga"
        ];

    // mengganti isi pada indeks ke-2
    $hobi[2] = "Bersepeda";
    // menambahkan isi pada indeks ke-3
    $hobi [3] = "Badminton";
    // menambahkan isi pada indeks terakhir
    $hobi[] = "Cooking";

    // cetak array dengan perulangan
    foreach ($hobi as $hobiku){
        echo $hobiku."<br>";
    }
    ?>

  <hr>
  <h1>Membuat Array Asosiatif</h1>
  <?php
    // membuat array asosiatif
    $mhs = [
        "nim" => "1904030082",
        "nama" => "Siti Nuraini",
        "fakultas" => "Teknik",
        "jurusan" => "Teknik Informatika"
    ];
        
    // mencetak isi array assosiatif
    echo "<h2>Data Mahasiswa</h2>";
    echo "<p>Nim        : ".$mhs["nim"]."</br>";
    echo "<p>Nama       : ".$mhs["nama"]."</br>";
    echo "<p>Fakultas   : ".$mhs["fakultas"]."</br>";
    echo "<p>Jurusan    : ".$mhs["jurusan"]."</br>";
    ?>

  <hr>
  <h1>Array Multi Dimensi</h1>
  <?php
    // ini adalah array dua dimensi
    $matrik = [ 
        [2,3,4],
        [7,5,0],
        [4,3,8],
    ];

    // cara mengakses isinya
    echo $matrik[1][0]; //-> output: 7
    ?>

  <hr>
  <h1>Ini Adalah Array 2 Dimensi</h1>
  <?php
    // membuat array 2 dimensi yang berisi array asosiatif
    $temans = [
        [ 
            "nama" => "Jupirnia Waruwu",
            "hubungan" => "Teman"
        ],
        [
            "nama" => "Anisa Azizatul",
            "hubungan" => "Teman"
        ],
        [ 
            "nama" => "Anisa Nurul",
            "hubungan" => "Teman"
        ]
    ];

    // menampilkan array
    foreach($temans as $teman){
        echo "<h3>".$teman["nama"]."</h3>";
        echo "<p>".$teman["hubungan"]."<p>";
        echo "<hr>";
    }
    ?>
</body>

</html>