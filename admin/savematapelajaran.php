<meta http-equiv="Refresh" content="0; URL=matapelajaran.php">
<?php  
$kode_mapel = $_POST['kode_mapel'];  
$NIP = $_POST['NIP']; 
$kode_kelas = $_POST['kode_kelas'];    
include('koneksi.php');
$query = "insert into pembelajaran values ('','$kode_mapel','$NIP','$kode_kelas')";
$hasil = @mysql_query($query);  
     if ($hasil){
	echo "<script> Alert ('Berhasil Di Save') </script>";
} else {
	echo json_encode(array('msg'=>'Data tidak dapat di simpan.'));
}
?>  