<?php 
	require_once('scripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome to your admin panel</title>
</head>
<body>
	<h1>Admin Dashboard</h1>
	<h3>Welcome <?php echo $_SESSION['user_name'];?></h3>
	<p>This is the admin dashboard page</p>

	<nav>
		<ul>
			<li><a href="admin_createuser.php">Create User</a></li>
			<li><a href="admin_edituser.php">Edit User</a></li>
			<li><a href="admin_deleteuser.php">Delete User</a></li>
			<li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
		</ul>

		<ul>
			<li><a href="admin_addmovie.php">Add Movie</a></li>
			<li><a href="admin_editmovie.php">Edit Movie</a></li>
			<li><a href="admin_deletemovie.php">Delete Movie</a></li>
		</ul>
	</nav>
</body>
</html>