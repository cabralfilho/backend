<?php
$imgFile = $_FILES["file"];
echo $imgFile["name"];
return;
$data = base64_decode(explode(",", $data)[1]);
include 'db.php';
$imgFileName = $_POST["id"];
if (!file_exists("../userdata/imgs")) {
    mkdir("../userdata/imgs", 0777, true);
}
$imgPath = "../userdata/imgs/" . $imgFileName;
$f = fopen($imgPath, "wb");
fwrite($f, $data, strlen($data));
fclose($f);
echo $imgFileName;