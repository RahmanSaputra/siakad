<meta http-equiv="Refresh" content="0; URL=kelas.php">
<?php  
$kode_kelas = $_POST['kode_kelas'];  
$nama_kelas = $_POST['nama_kelas']; 
$jumlah_siswa = $_POST['jumlah_siswa'];    
include('koneksi.php');
$query = "insert into kelas values ('$kode_kelas','$nama_kelas','$jumlah_siswa')";
$hasil = @mysql_query($query);  
     if ($hasil){
	echo "<script> Alert ('Berhasil Di Save') </script>";
} else {
	echo json_encode(array('msg'=>'Data tidak dapat di simpan.'));
}
?>  