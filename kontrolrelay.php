<?php
// Prepare the SQL statement
require('koneksi.php');

$kontrol2 = $_GET['sensor2'];
mysqli_query($koneksi, "UPDATE `datakontrol` SET `sensor2`='$kontrol2' WHERE 1");



?>
