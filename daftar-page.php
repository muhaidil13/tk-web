<?php include "template/navbar.php";?>
<section class="daftar-tk-page">
    <div class="hero-input">
        <h1>Halaman Data Pendaftaran</h1>
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <label for="">Nama TK</label>
            <input type="text" name="nama_tk"  autocomplete="off">
            
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" >
            
            <label for="">Tempat Tanggal Lahir</label>
            <input type="date" name="ttl"  autocomplete="off">

            <label for="">Email</label>
            <input type="email" name="email"  autocomplete="off">

            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin"  autocomplete="off">
                <option value="">Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="">Agama</label>
            <input type="text" name="agama"  autocomplete="off">

            <label for="">Anak Ke</label>
            <input type="text" name="anak_ke"  autocomplete="off">

            <label for="">Jumlah Saudara</label>
            <input type="text" name="sdr"  autocomplete="off">

            <label for="">Kewarganegaraan</label>
            <select name="wn"  autocomplete="off">
                <option value="">Pilih Kewarganegaraan</option>
                <option value="Laki-Laki">WNI</option>
                <option value="Perempuan">WNA</option>
            </select>

            <label for="">Foto 3X4</label>
            <input type="file" name="foto"  autocomplete="off">

            <label for="">Nama Ayah</label>
            <input type="text" name="nama_ayah"  autocomplete="off">

            <label for="">Tempat Tanggal Lahir Ayah</label>
            <input type="date" name="ttl_ayah"  autocomplete="off">

            <label for="">Agama Ayah</label>
            <input type="text" name="agama_ayah"  autocomplete="off">

            <label for="">Kewarganegaraan Ayah</label>
            <select name="wn_ayah">
                <option value="">Kewarganegaraan</option>
                <option value="Laki-Laki">WNI</option>
                <option value="Perempuan">WNA</option>
            </select>
            <label for="">Pekerjaan Ayah</label>
            <input type="text" name="pekerjaan_ayah"  autocomplete="off">

            <label for="">Pendidikan Ayah</label>
            <input type="text" name="pendidikan_ayah"  autocomplete="off">

            <label for="">Nama Ibu</label>
            <input type="text" name="nama_ibu"  autocomplete="off">

            <label for="">Tempat Tanggal Lahir Ibu</label>
            <input type="date" name="ttl_ibu"  autocomplete="off">

            <label for="">Agama Ibu</label>
            <input type="text" name="agama_ibu"  autocomplete="off">

            <label for="">Kewarganegaraan Ibu</label>
            <select name="wn_ibu"  autocomplete="off">
                <option value="">Kewarganegaraan</option>
                <option value="Laki-Laki">WNI</option>
                <option value="Perempuan">WNA</option>
            </select>
            <label for="">Pekerjaan Ibu</label>
            <input type="text" name="pekerjaan_ibu"  autocomplete="off">

            <label for="">Pendidikan Ibu</label>
            <input type="text" name="pendidikan_ibu"  autocomplete="off">


            <button class="simpan" name="kirim_peserta">Simpan</button>
        </form>
    </div>
</section>
<?php include "template/footer.php";?>
</body>
</html>