<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SISTEM KALKULATOR</title>
<style>
body {
  font-size: 38px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
<center>
<div class="header">
<img alt="Gambar matematik" src="mathss.jfif" height="400" width="2000" />
</div>
</center>
<ul>
  <li><a href="papar.php">utama</a></li>
  <li><a href="kira.php">kalkulator</a></li>
  <li><a class="active" href="logout.php">logout</a></li>
</ul>
<center>
<?php
session_start();
session_destroy();
echo "You were logout. thankyou !";

echo "<a href=\"index.php\">HOME</a>";
?>
<center>
</body>
</html>
