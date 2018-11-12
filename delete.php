<?php
include 'konek.php';
$ID = $_GET['ID'];

$sql_delete=("DELETE FROM user WHERE ID='$ID' ");

mysqli_query($conn,$sql_delete)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Dihapus");
location="index.php?"
</script>';

?>
