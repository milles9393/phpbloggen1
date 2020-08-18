<?php
ob_start(); // output buffering is turned on
require_once('database/database.php');
require_once('database/query_functions.php');

$db = db_connect();

function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

?>


