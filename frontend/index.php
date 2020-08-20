<?php include('../shared/header.php'); ?>



<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="../stylesheets/register.css">
</head>
<body>

<div id="content">
    <div id="main-menu">

<div class="header">
    <h2>Register</h2>
</div>

<form method="post" action="../backend/database/register_code.php">
    <div class="input-group">
        <label>firstname</label>
        <input type="text" name="firstname" value="" required>
    </div>
    <div class="input-group">
        <label>lastname</label>
        <input type="text" name="lastname" value="" required>
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="create">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</form>

    </div>
</div>
</body>
</html>



<?php include('../shared/footer.php'); ?>
