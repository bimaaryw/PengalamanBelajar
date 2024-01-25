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
$qdata= mysqli_query($connect,"SELECT kode,nama_barang,harga FROM barang ORDER BY kode");
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
<td align='center'><a href='formeditBarang.php?kode=<?php echo $pkode;?>'>Edit - </a>
                   <a href='hapusbarang.php?kode=<?php echo $pkode;?>'>Hapus</a></td>
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
