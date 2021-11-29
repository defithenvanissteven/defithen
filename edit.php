<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$nis = $_GET['id'];
	$data = mysqli_query($connect,"select * from daftar where nis='$nis'");
	while($d = mysqli_fetch_array($data)){
		?>
<form action="update.php" method="POST">
    <label>NIS</label><br>
    <input type="text" name="nis_input" value="<?php echo $d['nis']; ?>"><br>

    <label> Nama Depan </label><br>
    <input type="text" name="namadepan_input" value="<?php echo $d['nama_dpn']; ?>"><br> 

    <label> Nama Belakang </label><br>
    <input type="text" name="namabelakang_input" value="<?php echo $d['nama_blk']; ?>"> <br> <br>

    <label >Tempat Lahir </label>
     <select name="tempatlahir_input">
     	<?php 
     	$Madiun = "";
     	if ($d['tpt_lahir'] == "kab Madiun") {
     		$Madiun = 'selected';
     	}
     	$Ponorogo = "";
     	if ($d['tpt_lahir'] == "Kab Ponorogo") {
     		$Ponorogo = 'selected';
     	}
     	$Ngawi = "";
     	if ($d['tpt_lahir'] == "kab Ngawi") {
     		$Ngawi = 'selected';
     	}
     	$Magetan = "";
     	if ($d['tpt_lahir'] == "kab Magetan") {
     		$Magetan = 'selected';
     	}
     	?>
       <option value="kabmadiun" <?php echo $Madiun ?>> Kab Madiun </option>
       <option value="kabponorogo" <?php echo $Ponorogo ?>> Kab Ponorogo </option>
       <option value="kabngawi" <?php echo $Ngawi ?>> Kab Ngawi </option>
       <option value="kabmagetan" <?php echo $Magetan ?>> Kab Magetan </option>
     </select> <br> <br>

  	<label> Tanggal Lahir </label>
  	<input type="date" name="tanggallahir_input" value="<?php echo $d['tgl_lahir']; ?>"> <br> <br>

    <label> Jenis Kelamin </label>
    <?php 
     	$Laki = "";
     	if ($d['kelamin'] == "Laki Laki") {
     		$Laki = 'checked';
     	}
     	$Perempuan = "";
     	if ($d['kelamin'] == "Perempuan") {
     		$Perempuan = 'checked';
     	}
     	?>
    <input type="radio"  name="kelamin_input" value="Laki-Laki" <?php echo $Laki ?>>
   
    <label>Laki-Laki</label>
    <input type="radio"  name="kelamin_input" value="Perempuan" <?php echo $Perempuan ?>>
    <label >Perempuan</label><br> <br>

    <label> Hobby </label> 
    <input type="checkbox" name="hobby_input[]" value="Membaca">
    <label> Membaca </label>
    <input type="checkbox" name="hobby_input[]" value="Olahraga">
    <label> Olahraga </label>
    <input type="checkbox" name="hobby_input[]" value="Traveling">
    <label> Traveling </label><br> <br>

    <label> Alamat </label> <br>
    <input type="textarea" rows="3" name="alamat_input"> <br> <br>

    <input type="submit" >
		<?php 
	}
	?>
 
</body>
</html>