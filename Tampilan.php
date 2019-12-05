<?php
include('connection.php');
$TampilData=mysqli_query($connection,"select * from t_pengajuan");

?>

<table border='1'>
	<tr>
		<td>NIK</td>
		<td>NAMA</td>
		<td>JABATAN</td>
		<td>JUMLAH_CUTI</td>
	</tr>

<?php while($cuti=mysqli_fetch_array($TampilData)) { ?>
		<tr>
			<td><?php echo $cuti['NIK']; ?></td>
			<td><?php echo $cuti['NAMA']; ?></td>
			<td><?php echo $cuti['JABATAN']; ?></td>
			<td><?php echo $cuti['CUTI']; ?></td>
		</tr>
	<?php } ?>
</table>