<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tampil barang</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">
<style>

td{
	color:#fff;
}
p{
color:#fff;
}
</style>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">A11.2018.11265</a>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
       <?php 
include "koneksi.php"; 
?>
<table border="1" width="550" align="center" cellpadding="5" cellspacing=0"">
<tr><td><b>NO</b></td>
<td><b>Kode</b></td>
<td><b>Nama Barang</b></td>
<td><b>Harga</b></td>
<td><b>Aksi</b></td>
</tr>
<?php
$i=0;
$qdata= mysqli_query($connect,"select kode,nama_barang,harga from barang order by kode");
while($rdata= mysqli_fetch_array($qdata,MYSQLI_BOTH))
{
$i++;
$pkode= $rdata["kode"];
$pnama= $rdata["nama_barang"];
$pharga= $rdata["harga"];
?>

<tr>
<td><?php echo $i;?></td>
<td><?php echo $pkode;?></td>
<td><?php echo $pnama;?></td>
<td><?php echo $pharga;?></td>
<td align='center'>
        <a href='formeditbarang.php?kode=<?php echo $pkode;?>'>Edit - </a>
       <a href='hapus_barang.php?kode=<?php echo $pkode;?>'>Hapus</a></td>
</tr>
<?php
}
?>
</table>
<p align='center'>Tambah Data Barang</p>
<form method='post' action='simpan_data.php'>
	<table align="center">
	<tr><td width=150>Kode Barang </td>
	<td><input type='text' name='kode_barang' size=4></td>
	</tr>
	<tr><td>Nama Barang</td>
	<td><input type='text' name='nama_barang' size=40></td>
	</tr>
	<tr><td>Harga</td>
	<td><input type="text" name='harga' size=15></td>
	</tr>
	<tr><td colspan=2 align='center'><input type='submit' value='SAVE'>
	<input type='reset' value='RESET'></td>
	</tr>
	</table>
</form>

      </div>
    </div>
  </header>

  

</body>

</html>
