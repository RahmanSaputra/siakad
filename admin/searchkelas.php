<?php

if (isset($_POST['query'])) {
    mysql_connect('localhost','root','');
    mysql_select_db('siakad');

    $query = $_POST['query'];

    $sql = mysql_query("SELECT * FROM kelas WHERE nama_kelas LIKE '%{$query}%'");
    $array = array();

    while ($row = mysql_fetch_assoc($sql)) {
        $array[] = $row['nama_kelas'];
    }
    echo json_encode($array);

}

?>