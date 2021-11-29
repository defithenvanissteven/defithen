<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
font-family: Georgia, serif;
}

header {
  font-family: "copperplate",fantasy;
  background-color:  #FFDAB9;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  padding: 25px;
  text-align: center;
  font-size: 30px;
  color: black;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #F4A460;
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

li a:hover:not(.active) {
  background-color: #8B4513;
}

.active {
  background-color: #8B4513;
}




section {

  background-color :  #FFDAB9;
}

footer {
  background-color:  #8B4513;
  padding: 10px;
  text-align: center;
  
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

</style>
</head>
   <body>
   <header>
  <h2>Form Login : </h2>
</header>
	   <ul>
	<li><a href="index2.php">Home</a></li>
 <li><a class="active" href="form.php">Daftar</a></li>
 <li><a href="presensi.php">Presensi</a></li>
  <li> <a href="awalii/index.html"> Portofolio </a></li>

    <li><a href="index.php">Logout</a></li>

	   </ul>

     <section>
<h1>FORM DATA </H1>
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
</section>

	   
<footer>
 <p>Di Buat Oleh <br>DEFITHEN VANIS STEVEN.</p>
</footer>
	   
</body>
</html>