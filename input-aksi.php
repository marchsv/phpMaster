
<?php
include 'konek.php';
$ID = $_POST['ID'];
$Username = $_POST['Username'];
$Class = $_POST['Class'];
$Nickname = $_POST['Nickname'];

$sql_insert="INSERT INTO user VALUES ('$ID','$Username','$Class','$Nickname')";

mysqli_query($conn,$sql_insert)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Disimpan");
location="index.php?"
</script>';
?>
