<?php

//check admin
require_once __DIR__ . '/admin_header.php';
if (isset($_POST['indexscan_deletefile'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        // deletefile goes here
        //chown(XOOPS_ROOT_PATH.DIRECTORY_SEPARATOR.$id,666);
        unlink($id);
    }
}
