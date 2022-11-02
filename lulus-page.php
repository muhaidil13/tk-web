<?php include "template/navbar.php";?>
<section class="hero-forms">
    <div class="hero-input">
        <h1>Update Kelulusan Calon</h1>
        <form action="">
            <label for="">Nama Tk</label>
            <input type="text" name="nama_tk" required autocomplete="off">
            
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" required autocomplete="off">
            
            <label for="">Jenis Kelamin</label>
            <input type="text" name="jk" required autocomplete="off">

            <label for="">Foto</label>
            <input type="file" name="gambar" required autocomplete="off">
            <button class="simpan">Simpan</button>
        </form>
    </div>
    
</section>
<?php include "template/footer.php";?>