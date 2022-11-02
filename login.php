<?php include "template/navbar.php";?>
<section class="hero-forms-login">
	<div class="hero-input">
		<h1>log in</h1>
		<form action="proses.php" method="POST">
			<input type="text" name="user" placeholder="Username">
			<input type="password" name="pass" placeholder="Password">
			<button name="kirim" class="simpan">Simpan</button>
		</form>
    </div>
</section>
<?php include "template/footer.php";?>
</body>
</html>