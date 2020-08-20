<?php
ob_start(); // output buffering is turned on
//whenever initialize.php is called it will load up queries and the DB connection.
//i can then use $db to make querys.
require_once('database/database.php');
require_once('database/query_functions.php');
$db = db_connect();

function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

?>


