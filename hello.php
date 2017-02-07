<?php
//variable $
$nik = '7560771'; //nama variable , isi variable
$nama= 'nyoman';
$a =2;
$b =8;
$hasil = $a * $b ;

//string ";
echo"<table border=1 width=50%>";
echo"<tr>";
echo"<td>";
echo $nik; // langsung tanpa kutip , untuk menampilkan dan memanggil variable
echo"wellcome Yogya".$nama;
echo"<br>";
echo" a =".$a ;
echo" b =".$b ;
echo" , a x b =".$hasil; //parameter untuk mengirim data ke link lain
echo " link <a href='link1.php?nilaia=".$a."&nilaib=".$b."'>Pindah Link </a>";
echo"</tr>";
echo"</td>";
echo"</table>";
?>

<table border=2>
	<tr><td>kedua</tr></td>
	</table>

