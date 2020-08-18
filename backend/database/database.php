<?php
require_once('db_credentials.php');



$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if(!$conn) {
    echo "Database connection faild...";
}
?>

?>