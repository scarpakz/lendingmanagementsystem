<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta author="<?php echo $author;?>">
        <title><?php echo $title;?></title>
		  <link rel="stylesheet" href="<?php echo $style;?>">
    </head>
    <body>
        <div class="login-bg">
		  		<div class="logo">
					<img src="<?php echo $main_logo; ?>" alt="Lending Management System">
				</div>
				<div class="form-group">
					<div id="login-error" class="login-error">
						<p align="center"><strong>Login Error!</strong> Username or password was incorrect. Try again.</p>
					</div>
					<form action="<?php echo base_url();?>index.php/Main/admin" method="POST">
						<label for="">Username</label>
						<input id="username" placeholder="Ex. admin123" name="username" type="text" required="" autofocus>
						<div class="custom-margin"></div>
						<label for="">Password</label>
						<input id="password" placeholder="Your password" name="password" type="password" required="">
						<center><input type="submit" class="login-btn" value="Log In" onclick="validation()"> </center>
					</form>
				</div>
		  </div>
		  <script src="<?php echo $jquery;?>"></script>
		  <script src="<?php echo $login_script;?>"></script>
    </body>
</html>