<meta http-equiv="Refresh" content="0; URL=pelajaran.php">
<?php  
$kode_mapel = $_REQUEST['kode_mapel'];
$nama_mapel = $_POST['nama_mapel'];    
include('koneksi.php');
$query = "update mata_pelajaran set nama_mapel='$nama_mapel' WHERE kode_mapel='$kode_mapel'";
$hasil = @mysql_query($query);  
     if ($hasil){
	echo "<script type=application/javascript> alert(Berhasil Di Save)</script>";
} else {
	echo json_encode(array('msg'=>'Data tidak dapat di simpan.'));
}
?>  