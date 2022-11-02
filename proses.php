<?php 

include "koneksi.php";

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
    
    $stmt = "insert into tk(gambar, npsn, nama, alamat, kode_pos, kelurahan, kecamatan, kota, provinsi, status, akreditasi, hp, email, website) values('$imageName','$npsn','$nama_tk','$alamat','$kd_pos','$kelurahan','$kecematan','$kota','$provinsi','$status','$akreditas','$no_hp','$email','$website')";
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
 
    // }else{
    //     echo '<script>alert("Username atau Password Anda salah!")</script>';
    // }
}