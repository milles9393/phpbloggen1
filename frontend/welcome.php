<?php include('../shared/header.php'); ?>
<?php include('../backend/initialize.php'); ?>

<html">

<head>
    <title>Welcome </title>
</head>

<body>
<h1>Welcome <?php echo "asdasd"; ?></h1>
<h2><a href = "logout.php">Sign Out</a></h2>

<form method="post" action="../backend/database/upload_code.php" enctype="multipart/form-data">
        <label>user_id</label>
        <input type="text" name="user_id" value="" required>
        <br>

        git<label>body</label>
        <input name="body" value="">
        <br>

        <label>title</label>
        <input name="title" value="">
        <br>  <br>  <br>  <br>  <br>  <br>  <br>

    Select Image File to Upload:
    <form enctype="multipart/form-data" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <input type="file" name="file_upload" accept="image/*" />
        <input type="submit" name="submit" value="Upload" />
    </form>
    <br>  <br>  <br>  <br>  <br>  <br>  <br>

    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
    <br>
</form>

</body>

</html>

<?php include('../shared/footer.php'); ?>
