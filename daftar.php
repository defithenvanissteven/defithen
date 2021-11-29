<html>
<head>
<body>
	<h1>FORM PENDAFTARAN</h1>
 <form action="prosesdaftar.php" method="POST">
    <label>NIS</label><br>
    <input type="text" name="nis_input"><br>

    <label> Nama Depan </label><br>
    <input type="text" name="namadepan_input"> <br> 

    <label> Nama Belakang </label><br>
    <input type="text" name="namabelakang_input"> <br> <br>

    <label >Tempat Lahir </label>
     <select name="tempatlahir_input">
       <option value="kabmadiun"> Kab Madiun </option>
       <option value="kabponorogo"> Kab Ponorogo </option>
       <option value="kabngawi"> Kab Ngawi </option>
       <option value="kabmagetan"> Kab Magetan </option>
     </select> <br> <br>

  	<label> Tanggal Lahir </label>
  	<input type="date" name="tanggallahir_input"> <br> <br>

    <label> Jenis Kelamin </label>
    <input type="radio"  name="kelamin_input" value="Laki-Laki">

    <label>Laki-Laki</label>
    <input type="radio"  name="kelamin_input" value="Perempuan">
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
    

 </form>
</body>
</head>
</html>