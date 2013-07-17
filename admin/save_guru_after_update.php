<meta http-equiv="Refresh" content="0; URL=guru.php">
<?php  
$NIP = $_REQUEST['NIP'];
$nama = $_POST['nama'];    
$email = $_POST['email'];  
$alamat = $_POST['alamat'];  
$telp = $_POST['telp']; 
include('koneksi.php');
$query = "update guru set nama='$nama',email='$email',alamat='$alamat',telp='$telp' WHERE NIP=$NIP";
$hasil = @mysql_query($query);  
     if ($hasil){
	echo "<script type=application/javascript> alert(Berhasil Di Save)</script>";
} else {
	echo json_encode(array('msg'=>'Data tidak dapat di simpan.'));
}
?>  