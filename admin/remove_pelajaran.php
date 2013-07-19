<meta http-equiv="Refresh" content="0; URL=pelajaran.php">
<?php
$kode_mapel=$_GET['kode_mapel'];
include 'koneksi.php';
$sql = "delete from mata_pelajaran where kode_mapel='$kode_mapel'";
$result = @mysql_query($sql);
if ($result){
	 echo "<script> Alert ('Berhasil Di remove') </script>";
} else {
	echo mysql_error();
}
?>