<?php

if (isset($_POST['query'])) {
    mysql_connect('localhost','root','');
    mysql_select_db('siakad');

    $query = $_POST['query'];

    $sql = mysql_query("SELECT pembelajaran.id_pembelajaran, guru.NIP, guru.nama, mata_pelajaran.nama_mapel, mata_pelajaran.kode_mapel
FROM guru
RIGHT JOIN pembelajaran 
ON guru.NIP = pembelajaran.NIP
RIGHT JOIN mata_pelajaran 
ON pembelajaran.kode_mapel = mata_pelajaran.kode_mapel WHERE nama LIKE '%{$query}%'");
    $array = array();

    while ($row = mysql_fetch_assoc($sql)) {
        $array[] = $row['nama'];
		
    }

    echo json_encode($array);

}

?>