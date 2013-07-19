<meta http-equiv="Refresh" content="0; URL=pendaftaran.php">
<?php
$no_daftar=$_GET['no_daftar'];
include 'koneksi.php';
$sql = "delete from pendaftaran where no_daftar=$no_daftar";
$result = @mysql_query($sql);
if ($result){
	 echo "<script> Alert ('Berhasil Di remove') </script>";
} else {
	echo json_encode(array('msg'=>'Data tidak dapat dihapus.'));
}
?>