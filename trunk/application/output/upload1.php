<?php
echo '99';exit;
$filename = basename($_FILES['upload']['name']);
// if (move_uploaded_file($_FILES['upload']['tmp_name'], 'E:/www/wulin/uploads/' . $filename)) {
if (move_uploaded_file($_FILES['upload']['tmp_name'], FCPATH . $filename)) {
//if (move_uploaded_file($_FILES['upload']['tmp_name'], "D:/www/wulin/uploads/" . $filename)) {
//     $data = array('filename' => $filename);
    $data = array('filename' => 'http://'.$_SERVER['HTTP_HOST'].'/uploads/'.basename($_FILES['upload']['name']));
} else {
    $data = array('error' => 'Failed to save');
}

// header('Content-type: text/html');
echo json_encode($data);
exit;
