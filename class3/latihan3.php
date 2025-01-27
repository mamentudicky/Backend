<?php

// tipe data char (karakter)
$jenis_kelamin = 'L';

// tipe data string (kata)
$nama_lengkap = "Petani";

// tipe data integer (bilangan bulat)
$umur = 20;

// tipe data float (bilangan pecahan)
$berat = 48.3;

// tipe data float
$tinggi = 182.2;

// tipe data boolean (benar/salah)
$menikah = false;

echo "Nama: $nama_lengkap";
echo "<hr> Jenis Kelamin: $jenis_kelamin";
echo "<hr> Umur: $umur";
echo "<hr>berat badan: $berat";
echo "<hr>tinggi badan: $tinggi";
echo "<hr>menikah: $menikah";

// tipe data array (kumpulan data)
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];
echo "<hr> Minuman: $minuman[0]";
echo "<hr> Makanan: $makanan[0]";
?>

