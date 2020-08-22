<?php
require_once('../initialize.php');
//session_start();

if(is_post_request()) {

//handle form values for register
    $fname = $_POST['firstname'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);
    $result = login_user($fname, $password);
}


?>