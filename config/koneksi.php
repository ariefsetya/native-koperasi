<?php
$engi="mysql";
$host="localhost";
$dbse="koperasi";
$user="root";
$pass="";

$koneksi=new PDO($engi.':dbname='.$dbse.";host=".$host,$user,$pass);
$url = "http://localhost/koperasi/";
?>