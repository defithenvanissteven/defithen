<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
	<br/>
	<a href="daftar.php">+ TAMBAH DATA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Nis</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Hobby</th>
			<th>Alamat</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($connect,"select * from daftar");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['nama_dpn']; ?></td>
				<td><?php echo $d['nama_blk']; ?></td>
				<td><?php echo $d['tpt_lahir']; ?></td>
				<td><?php echo $d['tgl_lahir']; ?></td>
				<td><?php echo $d['kelamin']; ?></td>
				<td><?php echo $d['hobby']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['nis']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>