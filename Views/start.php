<?php include('Views/header.html');

if(isset($_SESSION["us_username"]))
	{
		header("location:". FRONT_ROOT . "User/Profile"); ///si la sesion esta iniciada te manda de una al profile
	} 
?>

<body>

<div class="row">
	<div class="container index-box col-6">
    <img src="<?php echo IMG_PATH?>myhg_logo_black.png" alt="logo" id="logo-in-index">
		<span class="index-info">
			<h1>WELCOME TO YOUR FIGURE COLLECTION</h1>
            <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, iure.</h6>
		</span>
	</div>
    <div class="container session-in-index-box col-6">
		<span class="session-index-info ">
			
			<h1><a href="<?php echo FRONT_ROOT?>Session/Login">Login</a></h1>
			<h1><a href="<?php echo FRONT_ROOT?>Session/Register">Singup</a></h1>
			
		</span>
	</div>
</div>



</body>
</html>

<?php
include('Views/footer.html'); ?>
