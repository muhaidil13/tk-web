<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/style-input-tk.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=Inter:wght@400;800&family=Merienda&family=Playball&family=Poppins:ital,wght@0,200;0,300;0,800;1,200;1,300;1,600&family=Quicksand:wght@400;500;600&family=Yellowtail&display=swap" rel="stylesheet">
    <title>home</title>
</head>
<body>
    <section class="main">
        <div class="navbar">
            <h1>TK Islam Makassar</h1>
        </div>
        <div class="list">
            <a href="index.php">Home</a>
            <?php if (isset($_SESSION["id"]) == 1):?>
                <a href="tk-page.php">Data TK</a>
            <?php endif;?>
            <a href="">Daftar Tk</a>
            <a href="">Kelulusan</a>
            <a href="login.php">Login</a>
            </div>

    </section>