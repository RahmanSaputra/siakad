<?php

$conn = @mysql_connect('localhost','h113330_root','awerasdfgh');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('h113330_siakad', $conn);

?>