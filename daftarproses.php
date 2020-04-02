<?php
include('connection.php');

$username=$_POST['username'];
$password=$_POST['password'];
echo"<br>";

$query="INSERT INTO login(username,password) VALUES('$username','$password')";
if(mysqli_query($conn,$query)){
	echo "Pendaftan Barjaya.Sila Login Semula";
	echo "<a href=\"login.php\">Daftar Masuk</a>";}
else
	{echo "Pendaftan Tidak Barjaya.Sila Cuba Lagi. <a href='login.php'>Cuba Lagi</a>";}
?>
