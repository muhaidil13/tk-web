<?php 

include "koneksi.php";

// Handling form input tk
if (isset($_POST["simpan"])){
    // Handling Multipart-from data files
    // Nama files
    $imageName = $_FILES["gambar"]["name"];

    // handling postform data

    $npsn = $_POST["npsn"];
    $nama_tk = $_POST["nama-tk"];
    $alamat = $_POST["alamat"];
    $kd_pos = $_POST["kd-pos"];
    $kelurahan = $_POST["kelurahan"];
    $kecematan = $_POST["kecematan"];
    $kota = $_POST["kota"];
    $provinsi = $_POST["provinsi"];
    $status = $_POST["status"];
    $akreditas = $_POST["akreditas"];
    $no_hp = $_POST["no-hp"];
    $email = $_POST["email"];
    $website = $_POST["web"];
    
    $stmt = "insert into tk(gambar, npsn, nama, alamat, kode_pos, kelurahan, kecamatan, kota, provinsi, status, akreditasi, hp, email, website) 
    values(
        '$imageName',
        '$npsn',
        '$nama_tk',
        '$alamat',
        '$kd_pos',
        '$kelurahan',
        '$kecematan',
        '$kota',
        '$provinsi',
        '$status',
        '$akreditas',
        '$no_hp',
        '$email',
        '$website'
        )";
    $result = mysqli_query($con,$stmt);
        // location for save files
    $imageLocations = "image/";

    // store tmp name jika user upload files
    $imageTemp = $_FILES["gambar"]["tmp_name"];
    mysqli_close($con);

    if (is_uploaded_file($imageTemp)){
        if(move_uploaded_file($imageTemp, $imageLocations . $imageName)){
            header("Location: http://localhost/latihanphp/index.php");
        }
    }
    else{
        echo "Gagal Upload files";
    }
}


// Handling form login user if success login will redirect to index.php
if(isset($_POST['kirim'])){
    session_start();
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $pas =md5($pass);

    $stmt = "select * from admin where username = '$user' and password_ = '$pas'";
    $cek = mysqli_query($con, $stmt);

    if(mysqli_num_rows($cek) > 0){
        $d = mysqli_fetch_assoc($cek);
        $_SESSION['status_login'] = true;
        $_SESSION['a_global'] = $d;
        $_SESSION['id'] = $d["admin_id"];
        // var_dump($_SESSION);
        header('Location: http://localhost/latihanphp/index.php');  
    }
    else{
        //  '<script>alert("Username atau Password Anda salah!")</script>';
        header('Location: http://localhost/latihanphp/login.php');  
    }
}

if(isset($_POST["kirim_peserta"])){
    // Handling user input string / int
    $ntk = $_POST["nama_tk"];
    $nama = $_POST["nama"];
    $ttl = $_POST["ttl"];
    $email = $_POST["email"];
    $jk = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $ank_ke = $_POST["anak_ke"];
    $sdr = $_POST["sdr"];
    $wn = $_POST["wn"];
    $n_ayah = $_POST["nama_ayah"];
    $t_ayah = $_POST["ttl_ayah"];
    $agm_ayah = $_POST["agama_ayah"];
    $wn_ayah = $_POST["wn_ayah"];
    $pkr_ayah = $_POST["pekerjaan_ayah"];
    $pdk_ayah = $_POST["pendidikan_ayah"];
    $n_ibu = $_POST["nama_ibu"];
    $t_ibu = $_POST["ttl_ibu"];
    $agm_ibu = $_POST["agama_ibu"];
    $wn_ibu = $_POST["wn_ibu"];
    $pkr_ibu = $_POST["pekerjaan_ibu"];
    $pdk_ibu = $_POST["pendidikan_ibu"];

    // Hanling user input type files
    $fotoName = $_FILES["foto"]["name"];

    // location for save files
    $imageLocations = "image/foto-peserta/";

    // store tmp name jika user upload files
    $imageTemp = $_FILES["foto"]["tmp_name"];

    $stmt = "insert into calon(nama_tk, nama, ttl, email, jenis_kelamin, agama, anak_ke, sdr, wn, foto ,nama_ayah, ttl_ayah, agama_ayah, wn_ayah, pekerjaan_ayah, pendidikan_ayah, nama_ibu, ttl_ibu, agama_ibu, wn_ibu, pekerjaan_ibu,pendidikan_ibu) values 
    ('$ntk',
    '$nama',
    '$ttl',
    '$email',
    '$jk',
    '$agama',
    '$ank_ke',
    '$sdr',
    '$wn',
    '$fotoName',
    '$n_ayah',
    '$t_ayah',
    '$agm_ayah',
    '$wn_ayah',
    '$pkr_ayah',
    '$pdk_ayah',
    '$n_ibu',
    '$t_ibu',
    '$agm_ibu',
    '$wn_ibu',
    '$pkr_ibu',
    '$pdk_ibu'
    )";
    
    $result = mysqli_query($con,$stmt);
    mysqli_close($con);

    if (is_uploaded_file($imageTemp)){
        if(move_uploaded_file($imageTemp, $imageLocations . $fotoName)){
            header("Location: http://localhost/latihanphp/index.php");
        }
    }
    else{
        echo "Gagal Upload files";
    }   
}

$getid= $_GET["id"];
$stmt = "select * from calon where id = '$getid'";
$result = mysqli_query($con, $stmt);
$row = mysqli_fetch_assoc($result);
var_dump($row);