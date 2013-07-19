<meta http-equiv="Refresh" content="0; URL=pelajaran.php">
<?php    
$kode_mapel = $_POST['kode_mapel'];  
$nama_mapel = $_POST['nama_mapel']; 
include('koneksi.php');
$query = "insert into mata_pelajaran values ('$kode_mapel','$nama_mapel')";
$hasil = @mysql_query($query);  
     if ($hasil){
	echo "<script> Alert ('Berhasil Di Save') </script>";
} else {
	echo mysql_error();
}
?>  