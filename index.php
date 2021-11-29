<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
font-family: Arial, Helvetica, sans-serif;
}

header {
  font-family: "copperplate",fantasy;
  background-color:  #F4A460;
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
  background-color:  #8B4513;
}

.active {
  background-color:  #8B4513;
}

article {
  float: left;
  padding: 30px;
  width: 100%;
 background-color:#FFDAB9;
  height: 200px;
text-align: center;  
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
   <nav>
	   <ul>
  <li><a class="active" href="index.html">Login</a></li>
 
	   </ul>
	   </nav>
<header>
  <h2>Form Login : </h2>
</header>
     <section>
	 <article>
	 
	 <form action="ceklogin.php" method="post">
<label> Username </label><br>
<input type="text" name="username"><br>
<label> Password </label><br>
<input type="password" name="password"><br>
<br>
<input type="Submit">
<input type="reset">


</form>
</article>
	 </section>

	   
<footer>
 <p>Di Buat Oleh <br>DEFITHEN VANIS STEVEN</p>
</footer>
	   
</body>
</html>

