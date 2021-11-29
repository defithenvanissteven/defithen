<?php 
// koneksi database
include 'koneksi.php';

$nis       =$_POST['nis_input'];
$namadpn   =$_POST['namadepan_input'];
$namablk   =$_POST['namabelakang_input'];
$tptlahir  =$_POST['tempatlahir_input'];
$tgllahir  =$_POST['tanggallahir_input'];
$kelamin   =$_POST['kelamin_input'];
$hobby     =implode(",", $_POST['hobby_input']);
$alamat    =$_POST['alamat_input'];
 
$queri=mysqli_query($connect,"update daftar set nama_dpn='$namadpn', nama_blk='$namablk', tpt_lahir='$tptlahir', tgl_lahir='$tgllahir', kelamin='$kelamin', hobby='$hobby', alamat='$alamat' where nis='$nis'");
if($queri){
	echo '<script>alert("Data berhasil diupdate. Terimakasih.")</script>';
	header("location:presensi.php");
	exit;
} else {
	echo '<script>alert("Data GAGAL diupdate")</script>';
	header("location:presensi.php");
	exit;
}
 
?>