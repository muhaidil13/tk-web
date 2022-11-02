<?php include "template/navbar.php";?>
<?php 
include "koneksi.php";
$stmt = "select * from calon where islulus = 1";
$result = mysqli_query($con,$stmt);

?>
<section class="form-lulus">
    <div class="hero-input">
        <h1>Daftar Calon Peserta Yang Lulus</h1>
        <table border="1" cellspacing="0" cellpadding="10" width="1000px" style="color:white; text-align:center;">
        <thead>
            <th>No. </th>
            <th>Nama Calon</th>
            <th>Tk Pilihan</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
        </thead>
        <tbody>
            <?php $i = 1;?>
            <?php while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["nama_tk"] ?></td>
                <td><?php echo $row["jenis_kelamin"] ?></td>
                <td><?php echo $row["agama"] ?></td>
                <?php $i++;?>
                <!-- <input type="text" name="agama"  value="<?php echo $row["agama"] ?>"> -->
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
    </div>
    
</section>
<?php include "template/footer.php";?>