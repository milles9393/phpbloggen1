<?php
require_once('../initialize.php');
//session_start();

if(is_post_request()) {

//handle form values for register
    $user_id2 = $_POST['user_id'];
    $title2 = $_POST['title'];
    $body2 = $_POST['body'];
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    #upload directory path
    $uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    echo "lololol", $uploads_dir . '/' . $pname;
    $result = insert_post($user_id2, $title2, $pname, $body2);
    echo "<br>", realpath($tname);
    echo "<br>";
    echo $uploads_dir . '/' . $pname;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    echo print_r($_FILES['file_upload']);

}
else
{
    echo "Error" ;
}
?>
