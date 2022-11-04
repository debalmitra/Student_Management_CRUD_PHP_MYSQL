<?php
date_default_timezone_set('Asia/Calcutta');
$link = mysqli_connect("localhost", "root", "","your_DB_name");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
$link->set_charset("utf8mb4");
$master_details['project_name']='Student Management';
$master_details['project_desc']='The crud opreation for students. Like create , read, update and delete student data';
?>
