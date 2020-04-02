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
  <li><a class="active" href="papar.php">utama</a></li>
  <li><a href="kira.php">kalkulator</a></li>
  <li><a href="logout.php">logout</a></li>
</ul>
<form action="loginproses.php" method="post">

<center>
<h2>LOGIN</h2>
<h3>please enter your username and password</h3>
Username:<input type="text"name="username"size="20"/>
	Password:<input type="password"name="password"size="10"/>
<br>
<input type='submit' name='login'value='submit'>
<a href="daftar.php"target="top"value="daftar">sign up</a>
</br>
</center>
<br>
<center>
<a href="papar.php"target="top"value="background">CHANGE COLOUR BACKGROUND</a>
</body>
</html>