<?php 

$con = mysqli_connect("localhost","root","","tk-islam");

if (!$con){
    echo "gagal terhubung ke database";
}else{
    echo "terhubung ke database";
}

