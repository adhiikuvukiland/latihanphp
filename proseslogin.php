<?php //proses login menggunakan metode POST

$username = $_POST['username'];
$password = $_POST['password'];

if ( ($username=='nyoman') && ($password='12345'))
	{
		echo ' <script language="javascript">';
		echo ' document.location="link1.php"';
		echo ' </script>';
	}
else
	{
		echo ' <script language="javascript">';
		echo ' document.location="index.php"';
		echo ' </script>';
	}
?>