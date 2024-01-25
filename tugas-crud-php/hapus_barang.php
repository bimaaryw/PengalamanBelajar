<?php
{
include "koneksi.php";
$kode=$_GET['kode'];
$query2 = " DELETE FROM barang WHERE kode ='$kode'";
mysqli_query($connect , $query2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>data dihapus</h1>
	<a href="index.php">kembali</a>
</body>
</html>