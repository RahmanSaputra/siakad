<meta http-equiv="Refresh" content="0; URL=guru.php">
<?php  
$nama = $_POST['nama'];  
$password = $_POST['password']; 
$tgl_lahir = $_POST['tgl_lahir'];    
$email = $_POST['email'];  
$alamat = $_POST['alamat'];  
$telp = $_POST['telp']; 
$kelamin = $_POST['kelamin']; 
$jabatan = $_POST['jabatan']; 
include('koneksi.php');
$query = "insert into guru values ('','$nama','$password','$tgl_lahir','$email','$alamat','$telp','$kelamin','$jabatan')";
$hasil = @mysql_query($query);  
     if ($hasil){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Data tidak dapat di simpan.'));
}
?>  