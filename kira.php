<html>
<head>
<title>SISTEM KALKULATOR</title>
</head>
<body>
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
  <li><a class="active" href="kira.php">kalkulator</a></li>
  <li><a href="logout.php">logout</a></li>
</ul>
<?php if(isset($_POST['nombor'])){ 
$pertama = $_POST['pertama'];
$kedua = $_POST['kedua'];
$operasi = $_POST['operasi'];
 switch ($operasi) {
     case 'tambah':
     $hasil = $pertama + $kedua;
   break;
   case 'tolak':
    $hasil = $pertama - $kedua;
   break;
   case 'darab':
    $hasil = $pertama * $kedua;
    break;
   case 'bahagi':
    $hasil = $pertama / $kedua;
   }
}
 ?>
<center>
 <div class="kalkulator">
  <h1>KALKULATOR</h1>
  <form action="" action="" method="post">
    
   <input class="number" type="number" name="pertama" placeholder="Bilangan Pertama">
   
   <input class="number" type="number" name="kedua" placeholder="ilangan Kedua">
   <br>
   <select class="button" name="operasi">
<option value="bahagi">/</option>
<option value="tolak">-</option>
<option value="darab">*</option>
<option value="tambah">+</option>
   </select>
   <br><br>
   <input type="submit" name="nombor" class="tombol" value="sama dengan">
  </form>

  <?php if(isset($_POST['nombor'])){ ?>
  <input type="text" value="<?php echo $hasil; ?>" class="number">
  <?php }else{ ?>
   <input type="text" value="0" class="number">
  <?php } ?> <br>

</div></center>
 </body>
 </html>
