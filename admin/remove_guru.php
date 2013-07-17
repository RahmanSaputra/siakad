<meta http-equiv="Refresh" content="0; URL=guru.php">
<?php
$NIP=$_GET['NIP'];
include 'koneksi.php';
$sql = "delete from guru where NIP=$NIP";
$result = @mysql_query($sql);
if ($result){
	 echo "<script> Alert ('Berhasil Di Save') </script>";
} else {
	echo json_encode(array('msg'=>'Data tidak dapat dihapus.'));
}
?>