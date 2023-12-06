<?php
require "koneksi.php";  

$sql1 = mysqli_query($koneksi, "SELECT * FROM datakontrol WHERE id = 1");


$row1 = mysqli_fetch_assoc($sql1);

echo $row1['sensor2'];


?>
