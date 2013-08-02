<meta http-equiv="Refresh" content="10; URL=kelas.php">
<?php
$kode_kelas=$_GET['kode_kelas'];
include 'koneksi.php';
$sql = "delete from kelas where kode_kelas='$kode_kelas'";
$result = @mysql_query($sql);
if ($result){
	 echo "<script> Alert ('Berhasil Di Save') </script>";
} else {
	echo json_encode(array('msg'=>'Data tidak dapat dihapus.'));
}
?>