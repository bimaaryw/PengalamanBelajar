<?php
include "koneksi.php";
$kodelawas=$_GET['kodelama'];
$kode=$_POST['kode_barang'];
$nama=$_POST['nama_barang'];
$harga=$_POST['harga'];
$query = "UPDATE barang
SET kode = '$kode',nama_barang = '$nama', harga = '$harga'
WHERE kode = '$kodelawas'";
$hasil = mysqli_query($connect,$query);
if($hasil)
{
echo "<h3 align='center'>Pengiriman Data Sukses !</h3>";
header("location: index.php");
} else {
echo "<h3 align='center'>Pengiriman Data Gagal !
<input type=button value=BACK 
OnClick=self.history.back();></h3>";
}
?>
