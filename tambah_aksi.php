<?php
// koneksi database
$koneksi = mysqli_connect("localhost","root","","sekolah");

// koneksi data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('','$nama','$nim','$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>