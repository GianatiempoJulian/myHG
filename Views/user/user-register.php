<?php include('Views/header.html'); ?>

<form action="<?php echo FRONT_ROOT ?>Session/VerifyRegister" method="post">
<h1 class="session-title">Register</h1>
    <div class="container session-background">
        <div class="session-form">
            <label class = "session-form-desc"  for="">Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="session-form"">
            <label class = "session-form-desc" for="">Mail</label>
            <input type="email" name="email" required>
        </div>
        <div class="session-form"">
            <label class = "session-form-desc" for="">Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" class="submit-button">Next</button>
    </div> 
<?php include('Views/footer.html'); ?>