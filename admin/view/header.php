<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- icon -->
	<script src="https://kit.fontawesome.com/0e14ebdea1.js" crossorigin="anonymous"></script>

	<!-- My CSS -->
	<link rel="stylesheet" href="layout/assets/bootstrap-5.3.2-dist/css/bootstrap.css">
	<link rel="stylesheet" href="admin/layout/assets/css/header_footer.css">
	<?php
	switch ($_GET['active']) {
		// admin
		// book
		case 'book_authorUpdate':
			$active = 'book_authorUpdate';
			break;
		case 'book_genreUpdate':
			$active = 'book_genreUpdate';
			break;
		case 'book_update':
			$active = 'book_update';
			break;
		case 'book_management':
			$active = 'book_management';
			break;
		// user
		// web
		case 'home':
			$active = 'dashboard';
			break;

		default:
			$active = 'dashboard';
			break;
	}
	?>
	<link rel="stylesheet" href="admin/layout/assets/css/<?= $active ?>.css">

	<link rel="icon" href="layout/images/logoGalaxyBook 2.png" type="image/png">
	<title>Galaxybook - Quản lý</title>
</head>

<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="index.php?pg=ad&active=home" class="brand">
			<i class='bx bxs-smile'>
				<!-- <img src="upload/avatar/avatar1.jpg" alt=""> -->
			</i>
			<span class="text">Xin chào<br>
				<?= $_SESSION['user']['HoVaTen'] ?>
			</span>
		</a>
		<ul class="side-menu top">
			<?php
			if ($_GET['active'] === 'home') {
				echo '<li class="active">';
			} else {
				echo '<li class="">';
			}
			?>
			<a href="index.php?pg=ad&active=home">
				<i class='bx bxs-dashboard'></i>
				<span class="text">Bảng điều khiển</span>
			</a>
			</li>
			<?php
			if ($_GET['active'] === 'book_management'|| $_GET['active'] ==='book_update' || $_GET['active'] ==='book_genreUpdate' || $_GET['active'] ==='book_authorUpdate') {
				echo '<li class="active">';
			} else {
				echo '<li class="">';
			}
			?>
			<a href="index.php?pg=ad&active=book_management">
				<i class='bx bxs-shopping-bag-alt'></i>
				<span class="text">Quản lý sách</span>
			</a>
			</li>
			<?php
			if ($_GET['active'] === 'user_management') {
				echo '<li class="active">';
			} else {
				echo '<li class="">';
			}
			?>
			<a href="index.php?pg=ad&active=user_management">
				<i class='bx bxs-doughnut-chart'></i>
				<span class="text">Quản lý người dùng</span>
			</a>
			</li>
			<?php
			if ($_GET['active'] === 'comment_management') {
				echo '<li class="active">';
			} else {
				echo '<li class="">';
			}
			?>
			<a href="index.php?pg=ad&active=comment_management">
				<i class='bx bxs-message-dots'></i>
				<span class="text">Quản lý bình luận</span>
			</a>
			</li>
			<?php
			if ($_GET['active'] === 'admin_management') {
				echo '<li class="active">';
			} else {
				echo '<li class="">';
			}
			?>
			<a href="index.php?pg=ad&active=admin_management">
				<i class='bx bxs-group'></i>
				<span class="text">Quản lý admin</span>
			</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="index.php?pg=home">
					<i class='bx bxs-cog'></i>
					<span class="text">Về GalaxyBook</span>
				</a>
			</li>
			<li>
				<a href="index.php?pg=logout" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Đăng xuất</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Tìm kiếm</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Tìm kiếm ...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">0</span>
			</a>
			<a href="#" class="profile">
				<img src="upload/avatar/<?= $_SESSION['user']['Avatar'] ?>" alt="<?= $_SESSION['user']['HoVaTen'] ?>">
			</a>
		</nav>
		<!-- NAVBAR -->