<?php
$koneksi=mysqli_connect('localhost','root','','awalinrl');

$nis       =$_POST['nis_input'];
$namadpn   =$_POST['namadepan_input'];
$namablk   =$_POST['namabelakang_input'];
$tptlahir  =$_POST['tempatlahir_input'];
$tgllahir  =$_POST['tanggallahir_input'];
$kelamin   =$_POST['kelamin_input'];
$hobby     =implode(",", $_POST['hobby_input']);
$alamat    =$_POST['alamat_input'];



$queri=mysqli_query($koneksi," INSERT INTO daftar (nis,nama_dpn,nama_blk,tpt_lahir,tgl_lahir,kelamin,hobby,alamat) VALUES ('$nis','$namadpn','$namablk','$tptlahir','$tgllahir','$kelamin','$hobby','$alamat')");

if($queri){
	echo '<script>alert("Data berhasil disimpan. Terimakasih.")</script>';
	exit;
} else {
	echo '<script>alert("Data GAGAL disimpan")</script>';
	exit;
}


?>