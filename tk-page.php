<?php include "template/navbar.php";?>
<section class="hero-forms">
    <div class="hero-input">
        <h1>Halaman Data Tk</h1>
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <label for="">TK Pilihan</label>
            <input type="file" name="gambar" >
            <label for="">NPSN</label>
            <input type="text" name="npsn"  autocomplete="off">
            
            <label for="">Nama TK</label>
            <input type="text" name="nama-tk" >
            
            <label for="">Alamat</label>
            <input type="text" name="alamat"  autocomplete="off">

            <label for="">Kode POS</label>
            <input type="text" name="kd-pos" >

            <label for="">kelurahan</label>
            <input type="text" name="kelurahan" >

            <label for="">Kecematan</label>
            <input type="text" name="kecematan" >

            <label for="">Kota</label>
            <input type="text" name="kota" >

            <label for="">Provinsi</label>
            <input type="text" name="provinsi" >

            <label for="">Status</label>
            <select name="status" >
                <option value="">Pilih Status Tk</option>
                <option value="swasta">Swasta</option>
                <option value="negri">Negri</option>
            </select>

            <label for="">Akreditas</label>
            <input type="text" name="akreditas" >

            <label for="">No. Hp</label>
            <input type="number" name="no-hp" >

            <label for="">Email</label>
            <input type="email" name="email" >

            <label for="">Website</label>
            <input type="text" name="web" >
            <button class="simpan" name="simpan">Simpan</button>
        </form>
    </div>
    
</section>
<?php include "template/footer.php";?>