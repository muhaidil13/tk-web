<?php include "template/navbar.php";?>
<section class="hero-forms">
    <div class="hero-input">
        <h1>Halaman Data Pendahtaran</h1>
        <form action="">
            <label for="">Nama TK</label>
            <input type="text" name="nama_tk" required autocomplete="off">
            
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" required>
            
            <label for="">Tempat Tanggal Lahir</label>
            <input type="text" name="ttl" required autocomplete="off">

            <label for="">Email</label>
            <input type="text" name="emai" required autocomplete="off">

            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" required autocomplete="off">
                <option value="">Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="">Agama</label>
            <input type="text" name="agama" required autocomplete="off">

            <label for="">Anak Ke</label>
            <input type="text" name="anak_ke" required autocomplete="off">

            <label for="">Jumlah Saudara</label>
            <input type="text" name="sdr" required autocomplete="off">

            <label for="">Kewarganegaraan</label>
            <select name="wn" required autocomplete="off">
                <option value="">Kewarganegaraan</option>
                <option value="Laki-Laki">WNI</option>
                <option value="Perempuan">WNA</option>
            </select>

            <label for="">Foto 3X4</label>
            <input type="file" name="foto" required autocomplete="off">

            <label for="">Nama Ayah</label>
            <input type="text" name="nama_ayah" required autocomplete="off">

            <label for="">Tempat Tanggal Lahir Ayah</label>
            <input type="text" name="ttl_ayah" required autocomplete="off">

            <label for="">Agama Ayah</label>
            <input type="email" name="agama_ayah" required autocomplete="off">

            <label for="">Kewarganegaraan Ayah</label>
            <select name="wn_ayah" required autocomplete="off">
                <option value="">Kewarganegaraan</option>
                <option value="Laki-Laki">WNI</option>
                <option value="Perempuan">WNA</option>

            <label for="">Pekerjaan Ayah</label>
            <input type="text" name="pekerjaan_ayah" required autocomplete="off">

            <label for="">Pendidikan Ayah</label>
            <input type="text" name="n_ayah" required autocomplete="off">

            <label for="">Nama Ibu</label>
            <input type="text" name="nama_ibu" required autocomplete="off">

            <label for="">Tempat Tanggal Lahir Ibu</label>
            <input type="text" name="ttl_ibu" required autocomplete="off">

            <label for="">Agama Ibu</label>
            <input type="email" name="agama_ibu" required autocomplete="off">

            <label for="">Kewarganegaraan Ibu</label>
            <select name="wn_ibu" required autocomplete="off">
                <option value="">Kewarganegaraan</option>
                <option value="Laki-Laki">WNI</option>
                <option value="Perempuan">WNA</option>

            <label for="">Pekerjaan Ibu</label>
            <input type="text" name="pekerjaan_ibu" required autocomplete="off">

            <label for="">Pendidikan Ibu</label>
            <input type="text" name="n_ibu" required autocomplete="off">


            <button class="simpan">Simpan</button>
        </form>
    </div>
    
</section>
<?php include "template/footer.php";?>