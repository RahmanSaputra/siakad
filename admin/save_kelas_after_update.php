<meta http-equiv="Refresh" content="0; URL=kelas.php">
<?php  
$kode_kelas = $_REQUEST['kode_kelas'];
$nama_kelas = $_POST['nama_kelas'];    
$jumlah_siswa = $_POST['jumlah_siswa'];  
include('koneksi.php');
$query = "update kelas set nama_kelas='$nama_kelas',jumlah_siswa='$jumlah_siswa' WHERE kode_kelas='$kode_kelas'";
$hasil = @mysql_query($query);  
     if ($hasil){
	echo "<script type=application/javascript> alert(Berhasil Di Save)</script>";
} else {
	echo json_encode(array('msg'=>'Data tidak dapat di simpan.'));
}
?>  