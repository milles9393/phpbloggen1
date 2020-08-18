<?php
require_once('../../shared/header.php');
require_once('../../shared/footer.php');
require_once('../initialize.php');
//$fname = $lname  = $email = $password = $pwd = '';

if(is_post_request()) {

//handle form values for register
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);

    $result = insert_user($fname, $lname, $email, $password);

    header("Location: ../../frontend/login.php");
}
else
{
    echo "Error" ;
}
?>









