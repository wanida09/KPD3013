<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SISTEM KALKULATOR</title>
<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
	</script>
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
<form action="loginproces.php" method="post">


<br>
<center>

 <div>
        <label>Change Background To:</label>
        <button type="button" onclick="changeBodyBg('gray');">Gray</button>
        <button type="button" onclick="changeBodyBg('lime');">Lime</button>
        <button type="button" onclick="changeBodyBg('orange');">Orange</button>
		<button type="button" onclick="changeBodyBg('pink');">Pink</button>
		<button type="button" onclick="changeBodyBg('blue');">Blue</button>
    </div>
	<script type="text/javascript"><?php echo $bgimage_session."();"; ?></script>
	<a href="index.php"target="top"value="utama">halaman utama</a>