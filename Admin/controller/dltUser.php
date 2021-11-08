<?php
require_once('../views/header.php');
$id = $_GET['id'];
if (copy('../model/user.txt', '../model/Prevuser.txt') != 1) {
     echo 'Error !!!';
     return;
}
$myPrevfile = fopen('../model/Prevuser.txt', 'r');
$myfile = fopen('../model/user.txt', 'w');
$counter = 0;

while (!feof($myPrevfile)) {
     $data = fgets($myPrevfile);
     if ($data != "") {
          if (++$counter != $id) {
               fwrite($myfile, $data);
          }
     }
}

header('location: ../views/userlist.php');

fclose($myfile);
fclose($myPrevfile);
$myPrevfile = fopen('../model/Prevuser.txt', 'w');
fwrite($myPrevfile, "");
fclose($myPrevfile);
?>