<?php
require_once('../initialize.php');
global $db;


$statusMsg = '';

// File upload path

$postid = $_POST['postid'];

$image_new_name = "";
if(isset($_FILES['file'])){
    $user_image = $_FILES['file'];

    $extension_array = explode(".", $user_image['name']);
    $extension = end($extension_array);

    $image_new_name = uniqid(true).".".$extension;
    $destination = "../../uploads/$image_new_name";

    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

    if(in_array($extension, $allowed_ext)){
        if($user_image['size'] <= 5000000){
            move_uploaded_file($user_image['tmp_name'], $destination);
        }else{
            exit("Max size 50MB");
        }
    }else{
        exit("Forbidden extension!");
    }

}

$insert = $db->query("INSERT into image (filename, created, postid) VALUES ('$image_new_name', NOW(),'$postid')");
if($insert){
    $statusMsg ="Successful upload";
}else{
    $statusMsg = "Failed upload";
}
// Display status message
echo $statusMsg;

?>