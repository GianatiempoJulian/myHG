<?php include('Views/header.html'); ?>


<?php

     if(isset($_SESSION["us_username"]))
     {
          header("location:". FRONT_ROOT . "User/Profile"); ///si la sesion esta iniciada te manda de una al profile
     } 

?>


<body>
   <div>
     <form action="<?php echo FRONT_ROOT?>Session/Verify" method="post">
          <h1 class="session-title">Login</h1>
          <div class="container session-background">
                    <div class="session-form">
                         <span class="session-form-desc">Username</span>
                         <input type="text" name="username"  required>
                    </div>
                    <div class="session-form"">
                         <span class="session-form-desc">Password</span>
                         <input type="password" name="password" required>
                    </div>
                    <button type="submit" class="submit-button">Login</button>
                    <a class="register-button-on-login" href="<?php echo FRONT_ROOT?>Session/Register">Singup</a>
          </div>
          
     </form>
   </div>     
</body>
</html>
<?php include('Views/footer.html'); ?>