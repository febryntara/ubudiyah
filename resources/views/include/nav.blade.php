<nav class="navbar navbar-default">
	<div class="container">
		<ul class="nav navbar-nav">
		<li><a href="/">Home</a></li>
			<li><a href="/galeri">Gallery</a></li>
			<li><a href="/guru">Guru</a></li>
			<li><a href="/siswa">Siswa</a></li>
			<!-- jika sudah ada sesi login -->
			<?php if (isset($_SESSION['user'])): ?>
			<li><a href="logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">Logout</a></li>
			<!-- jika belum ada -->
			<?php else: ?>
			<li><a href="login">Login</a></li>
			<?php endif ?>
		</ul>
	</div>
</nav>