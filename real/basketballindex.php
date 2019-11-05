<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="reg.css">
</head>
<?php include('functions.php') ?>

<body>
<style>

body{
	background-image:url('basketball.jfif');
	background-attachment:fixed;
	background-size:cover;
}
</style>
<div class="header">
	<h2>Bet</h2>
</div>
<form method="post" action="main.php">
<?php echo display_error(); ?>
	<center>
	<h1 style="color:red;">You've placed your Bet</h1>
	<div class="input-group">
		<button type="submit" class="btn" name="main.php">Home</button>
	</div>
	</center>
</form>
</body>
</html>