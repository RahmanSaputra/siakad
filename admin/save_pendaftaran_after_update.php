<meta http-equiv="Refresh" content="0; URL=pendaftaran.php">
<?php    
$no_daftar = $_REQUEST['no_daftar'];
$nama = $_REQUEST['nama'];  
$kelamin = $_REQUEST['kelamin']; 
$tempat_lahir = $_REQUEST['tempat_lahir'];    
$tgl_lahir = $_REQUEST['tgl_lahir'];  
$asal_sekolah = $_REQUEST['asal_sekolah'];  
$no_ijasah = $_REQUEST['no_ijasah']; 
$nama_orgtua = $_REQUEST['nama_orgtua']; 
$pekerjaan = $_REQUEST['pekerjaan']; 
$alamat = $_REQUEST['alamat']; 
$nilai_un = $_REQUEST['nilai_un']; 
$telp = $_REQUEST['telp']; 
$alasan = $_REQUEST['alasan']; 
$keterangan = $_REQUEST['keterangan']; 
$kode_kelas = $_REQUEST['kode_kelas']; 
include('koneksi.php');
$query = "update pendaftaran set nama='$nama',kelamin='$kelamin',tempat_lahir ='$tempat_lahir',tgl_lahir='$tgl_lahir',asal_sekolah ='$asal_sekolah',no_ijasah ='$no_ijasah',nama_orgtua ='$nama_orgtua',pekerjaan ='$pekerjaan',alamat ='$alamat',nilai_un ='$nilai_un',telp ='$telp',alasan ='$alasan',keterangan ='$keterangan',kode_kelas ='$kode_kelas' WHERE no_daftar=$no_daftar";
$hasil = @mysql_query($query);  
     if ($hasil){
	echo "<script> Alert ('Berhasil Di Save') </script>";
} else {
	echo mysql_error();
}
?>  