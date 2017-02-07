<?php //menggunakan metode GET

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

?>

<table border=2 width=50%>
<tr>
	<td>Nama : </td>
	<td>
		<?php
		echo $nama;
		?>
	</td>
</tr>

<tr>
	<td>Alamat : </td>
	<td>
		<?php
		echo $alamat;
		?>
	</td>
</tr>

</table>