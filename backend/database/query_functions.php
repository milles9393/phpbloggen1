<?php
function insert_user($fname, $lname, $email, $password) {
    global $db;

    $sql = "INSERT INTO user ";
    $sql .= "(Firstname, Lastname, Email, Password) ";
    $sql .= "VALUES (";
    $sql .= "'" . $fname . "',";
    $sql .= "'" . $lname . "',";
    $sql .= "'" . $email . "',";
    $sql .= "'" . $password . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
        return true;
    } else {
        // INSERT failed
        echo mysqli_error($db);
        //db_disconnect($db);
        exit;
    }
}

?>