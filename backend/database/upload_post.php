<?php
require_once('../initialize.php');
//session_start();

if(is_post_request()) {

//handle form values for register
    $user_id2 = $_POST['user_id'];
    $title2 = $_POST['title'];
    $body2 = $_POST['body'];
    $result = insert_post($user_id2, $title2, $body2);
}
else
{
    echo "Error" ;
}
?>
