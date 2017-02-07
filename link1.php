<?php
$A = $_GET['nilaia'];
$B = $_GET['nilaib'];
$C = $A + $B;


echo "A = ".$A;
echo "<br>B = ".$B;
echo " C = ".$C;

echo"<br>";
echo "ini Link 1.php";

echo"<form name='form1' action='link2.php' method=POST>";

echo"<table border =2 width=50%>"; //perhatikan table hanya satu kali tulis dan tutup


echo"<tr>";
echo"<td>Nama :         </td>";
echo"<td>";
echo"<input type=text name=nama>"; //nama = variable nya , type=text = textbox
echo"</td>";
echo"</tr>";

echo"<tr>";
echo"<td>Alamat : </td>";
echo"<td>";
echo"<input type=text name=alamat>"; //alamat = variable nya
echo"</td>";
echo"</tr>";

echo"<tr>";
echo"<td>";
echo"<input type=submit value='Submit'>";
echo"</tr>";
echo"</td>";

echo"</table>";

echo"</form>";
?>