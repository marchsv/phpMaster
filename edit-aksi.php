<?php

include 'konek.php';
$ID = $_POST['ID'];
$Username = $_POST['Username'];
$Class = $_POST['Class'];
$Nickname = $_POST['Nickname'];

$sql_update=("UPDATE user SET Username='$Username', Class='$Class', Nickname='$Nickname' WHERE ID='$ID'");

mysqli_query($conn,$sql_update)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Diedit");
location="index.php?"
</script>';

?>
