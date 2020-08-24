<?php include('../shared/header.php'); ?>
<?php include('../backend/initialize.php'); ?>


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
    <br>

</form>
        <form action = "../backend/database/login_code.php" method = "post">
            <label>UserName  :</label><input type = "text" name = "firstname" class = "box" required /><br /><br />
            <label>Password  :</label><input type = "password" name = "password" class = "box" required /><br/><br />
            <input type = "submit" value = " Submit "/><br />
        </form>
    </div>
</div>
</body>
</html>

<?php
    //list_user();
?>

<?php $posts = list_posts(); ?>

<head>
    <link rel="stylesheet" type="text/css" href="../stylesheets/posts.css">
</head>

<?php foreach ($posts as $post): ?>
    <div class="post" style="margin-left: 0px;">
            <div class="post_info">
                <h3><?php echo $post['title'] ?></h3>
                <p><?php echo $post['created_at'] ?></p>
                </div>
            </div>
    </div>
<?php endforeach ?>

<?php include('../shared/footer.php'); ?>





