<?php



require __DIR__ . '/vendor/autoload.php';

use UploadFile\Upload;

$config =[
    'savePath' => 'common/',
    'driver'    => 'sae',
];

$upload = new Upload($config);

$res = $upload->uploadOne($_FILES['file']);
var_dump($res);

