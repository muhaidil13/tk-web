<?php include "template/navbar.php";?>
<section class="hero-forms">
    <div class="hero-input">
        <h1>Halaman Data Tk</h1>
        <form action="">
            <label for="">TK Pilihan</label>
            <input type="file" name="gambar" required>
            <label for="">NPSN</label>
            <input type="text" name="npsn" required autocomplete="off">
            
            <label for="">Nama TK</label>
            <input type="text" name="nama-tk" required>
            
            <label for="">Alamat</label>
            <input type="text" name="alamat" required autocomplete="off">

            <label for="">Kode POS</label>
            <input type="text" name="kd-pos" required>

            <label for="">kelurahan</label>
            <input type="text" name="kelurahan" required>

            <label for="">Kecematan</label>
            <input type="text" name="kecematan" required>

            <label for="">Kota</label>
            <input type="text" name="kota" required>

            <label for="">Provinsi</label>
            <input type="text" name="provinsi" required>

            <label for="">Status</label>
            <select name="status" required>
                <option value="">Pilih Status Tk</option>
                <option value="swasta">Swasta</option>
                <option value="negri">Negri</option>
            </select>

            <label for="">Akreditas</label>
            <input type="text" name="akreditas" required>

            <label for="">No. Hp</label>
            <input type="number" name="no-hp" required>

            <label for="">Email</label>
            <input type="email" name="email" required>

            <label for="">Website</label>
            <input type="text" name="web" required>
            <button class="simpan">Simpan</button>
        </form>
    </div>
    
</section>
<?php include "template/footer.php";?>