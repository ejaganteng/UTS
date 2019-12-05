<?php
//connection database
include ("connection.php");

//menangkap data yang dikirim dari form
$NIK = $_POST ['NIK'];
$NAMA = $_POST ['NAMA'];
$JABATAN = $_POST ['JABATAN'];
$CUTI = $_POST ['CUTI'];

//menginput data ke database
mysqli_query ($connection, "insert into t_pengajuan values ('$NIK','$NAMA','$JABATAN','$CUTI')");

?>


	<Form Method="POST" action=""><!---Form untuk kirim data ke DB-->
	<table border="1">
		<tr>
			<td>NIK</td>
			<td><input name="NIK" type=""></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input name="NAMA" type="text"></td>
		</tr>
		<tr>
		<td>JABATAN</td>
			<td><input name="JABATAN" type="text"></td>
		</tr>
		<tr>
		<td>CUTI</td>
			<td><input name="CUTI" type="number"></td>
		</tr>
		<tr>
			<td><input name="Simpan" type="submit"></td>
		</tr>
	</table>
	</form>