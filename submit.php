<?php

require_once("connec.php");

$nim = $_POST["nim"];

$nama = $_POST["nama"];

$kelas = $_POST["kelas"];

$jeniskelamin = $_POST["jenis kelamin"];

$fakultas = $_POST["fakultas"];

$alamat = $_POST["alamat"];



$ = $_POST["kelas"];


$sql = "INSERT INTO pendaftaran (nim,nama,kelas,jeniskelamin,fakultas,alamat) VALUES ('$nim','$nama','$kelas','$jeniskelamin', '$fakultas' '$alamat')";



if (mysqli_query($conn, $sql)) {

    echo "created successfully<br>";

}else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}



mysqli_close($conn);

echo "Silahkan klik <a href='list.php'>link ini</a> untuk melanjutkan";