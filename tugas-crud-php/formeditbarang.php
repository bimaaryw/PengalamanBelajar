<?php
include "koneksi.php";
$kode=$_GET['kode'];
$qdata2 = mysqli_query($connect,"select kode,nama_barang,harga from barang where kode='$kode'");
while($rdata2 = mysqli_fetch_array($qdata2,MYSQLI_BOTH))
{
$nama2 = $rdata2["nama_barang"];
$harga2 = $rdata2["harga"];
$kodelama = $kode;
}
?>
<p align='center'>Ubah Data Barang <br><br>
<form method='post' action='edit.php?kodelama=<?= $kodelama; ?>'>
<input type='hidden' name='kode' value='<?php echo $kode; ?>'>
<input type='hidden' name='kirim_edit' value=1>
<table border=0 width=500 align='center'>
<tr><td width=150>Kode Barang </td>
	<td><input type='text' name='kode_barang' size=4 value='<?php echo $kode;?>'></td>
	</tr>
	<tr><td>Nama Barang </td>
	<td><input type='text' name='nama_barang' size=40 value='<?php echo $nama2;?>'></td>
	</tr>
	<tr><td valign='middle'>Harga 
	</td>
	<td><input type='text' name='harga' value='<?php echo $harga2;?>' ></td></tr>
	<tr><td colspan=2 align='center'>
	<input type='submit' value='SAVE'> <b align='center'>  </b><input type='reset' value='CANCEL'></td>
</tr>
</table></form></p>
