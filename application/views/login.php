<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NatureS | Login</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
</head>
<body class="text-center">
<?php echo form_open("auth/cek_login"); ?>
	<form class="form-signin">
		<h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
		<label for="inputEmail" class="sr-only">Username</label>
  		<input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
		  <br>
		<label for="inputPassword" class="sr-only">Password</label>
  		<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
		  <br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		<?php echo form_close(); ?>
	</form>

</body>
</html>