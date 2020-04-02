<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$pasti =(($username == 'wanida' AND $password =='wanidazeera'));
$_SESSION['id'] = $pasti;

if($_SESSION['id'])
{
	
	echo "<a href=\"kira.php\">pengiraan kalkulator</a>";
}

?>
