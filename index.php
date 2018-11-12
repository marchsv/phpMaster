<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
  	<h2><center>DATA PESERTA</center></h2>
  	<table class="tabel" align="center">
  <tr>
  	<th>ID</th>
  	<th>Username</th>
  	<th>Class</th>
  	<th>Nickname</th>
    <th>Aksi</th>
  </tr></div>
  <?php
  //  1. Lakukan include koneksi.php untuk membuat koneksi
  include('konek.php');

  // 2. Buat perintah SQL untuk menampilkan data
  $sql_tampil ="SELECT * FROM user";

  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $peserta=mysqli_query($conn,$sql_tampil);

  // 4. Lakukan fetch dengan result type MYSQL_ASSOC

  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    ?>
  	<tr>
      <td><?php echo $baris_data['ID']; ?></td>
      <td><?php echo $baris_data['Username']; ?></td>
      <td><?php echo $baris_data['Class']; ?></td>
      <td><?php echo $baris_data['Nickname']; ?></td>
      <td>
			<a class="edit" href="edit.php?ID=<?php echo $baris_data['ID']; ?>">Edit</a> |
			<a class="Delete" href="delete.php?ID=<?php echo $baris_data['ID']; ?>">Delete</a>
		  </td>
  	</tr>
<?php } ?>
</body>
</html>
