<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Edit data dari database</h2>

	</div>

	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>
	<form action="edit-aksi.php" method="post">
		<table>
      <tr>
        <td>ID</td>
        <td><input type="text" name="ID"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr>
				<td>Class</td>
				<td><input type="text" name="Class"></td>
			</tr>
			<tr>
				<td>Nickname</td>
				<td><input type="text" name="Nickname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save></td>
			</tr>
		</table>
	</form>
</body>
</html>
