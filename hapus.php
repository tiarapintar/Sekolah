<?php
// koneksi database
$koneksi = mysqli_connect("localhost","root","","sekolah");

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"delete from siswa where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>