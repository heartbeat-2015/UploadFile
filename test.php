<?php



require __DIR__ . '/vendor/autoload.php';

use UploadFile\Upload;

$upload = new Upload();

// $upload->test();

$res = $upload->uploadOne($_FILES['file']);
var_dump($res);
var_dump($upload->getError());
