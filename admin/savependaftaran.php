<meta http-equiv="Refresh" content="0; URL=pendaftaran.php">
<?php    
$nama = $_POST['nama'];  
$kelamin = $_POST['kelamin']; 
$tempat_lahir = $_POST['tempat_lahir'];    
$tgl_lahir = $_POST['tgl_lahir'];  
$asal_sekolah = $_POST['asal_sekolah'];  
$no_ijasah = $_POST['no_ijasah']; 
$nama_orgtua = $_POST['nama_orgtua']; 
$pekerjaan = $_POST['pekerjaan']; 
$alamat = $_POST['alamat']; 
$telp = $_POST['telp']; 
$nilai_un = $_POST['nilai_un']; 
$alasan = $_POST['alasan']; 
$keterangan = $_POST['keterangan']; 
$kode_kelas = $_POST['kode_kelas']; 
include('koneksi.php');
$query = "insert into pendaftaran values ('','$nama','$kelamin','$tempat_lahir','$tgl_lahir','$asal_sekolah','$no_ijasah','$nama_orgtua','$pekerjaan','$alamat','$telp','$nilai_un','$alasan','$keterangan','$kode_kelas')";
$hasil = @mysql_query($query);  
     if ($hasil){
	echo "<script> Alert ('Berhasil Di Save') </script>";
} else {
	echo mysql_error();
}
?>  