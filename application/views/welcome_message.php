<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="<? echo base_url();?>/css/style.css">
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>First CRUD</title>
</head>
<header>
	EXAMPLE
</header>
<body>
	<section id="par">
		<form action="<?php echo site_url('/Welcome/insert');?>" method="post">
			<p> <label>Name: </label> <input type="text" name="Name" /></p>
			<p> <label>Age: </label> <input type="text" name="Age" /></p>
			<p> <label>Email:</label> <input type="text" name="Email" /></p>
			<input type="submit" name="Save" value="Save" />
		</form>
	</section>
</body>
</html>
