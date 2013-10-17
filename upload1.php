<?php

$charid = strtoupper(md5(uniqid(mt_rand(), true)));
$hyphen = chr(45); // "-"
$uuid = chr(123)// "{"
        . substr($charid, 0, 8) . $hyphen
        . substr($charid, 8, 4) . $hyphen
        . substr($charid, 12, 4) . $hyphen
        . substr($charid, 16, 4) . $hyphen
        . substr($charid, 20, 12)
        . chr(125); // "}"
$filename = basename($_FILES['upload']['name']);
$abc = substr($uuid, 1, strlen($uuid) - 2);
$filename = $abc . ".jpg";
if (move_uploaded_file($_FILES['upload']['tmp_name'], '/data/apps/web/zllh/uploads/' . $filename)) {
    $data = array('filename' => '/uploads/' . $filename);
} else {
    $data = array('error' => 'Failed to save');
}

function create_guid() {
    $charid = strtoupper(md5(uniqid(mt_rand(), true)));
    $hyphen = chr(45); // "-"
    $uuid = chr(123)// "{"
            . substr($charid, 0, 8) . $hyphen
            . substr($charid, 8, 4) . $hyphen
            . substr($charid, 12, 4) . $hyphen
            . substr($charid, 16, 4) . $hyphen
            . substr($charid, 20, 12)
            . chr(125); // "}"
    return $uuid;
}

echo json_encode($data);
exit;
