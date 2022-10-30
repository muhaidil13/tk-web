<?php 
if (isset($_POST["kirim1"])){
    header("Location: http://localhost:80/latihanphp/coba.php?value=button1");
}
if (isset($_POST["kirim2"])){
    header("Location: http://localhost:80/latihanphp/coba.php?value=button-2");
}
if (isset($_POST["kirim3"])){
    header("Location: http://localhost:80/latihanphp/coba.php?value=button-3");
}
?>