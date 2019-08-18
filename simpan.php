<?php
$temp = $_FILES['cover']['tmp_name'];
$name = $_FILES['cover']['name'];
$size = $_FILES['cover']['size'];
$type = $_FILES['cover']['type'];
$folder = "files/";
// upload Process
//if ($size < 100000 and $type =='image/jpg') {
    move_uploaded_file($temp, $folder . $name);
    // menampikan informasi file yang di upload
    echo "Nama File : <b>" . $name;
    echo "</b><br>";
    echo "Ukuran File : <b>" . $size;
    echo "</b> Byte<br>";
    echo "Type File : <b>" . $type;
    echo "</b>";
//}else{
//    echo "Gagal Upload File";
//}
?>
