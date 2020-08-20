<?php

//alla DB queries


//Insert_User funktion som kollar ifall användarnamn/email redan existerar, om ej, lägg in i databas.
function insert_user($fname, $lname, $email, $password)
{
    global $db;

    $sql_u = "SELECT * FROM user WHERE Firstname='$fname'";
    $sql_e = "SELECT * FROM user WHERE Email='$email'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        $name_error = "Sorry... username already taken";
        echo $name_error;
        echo "<script type='text/javascript'>alert('$name_error');</script>";
        header("Location: ../../frontend/index.php");

    }else if(mysqli_num_rows($res_e) > 0){
        $email_error = "Sorry... email already taken";
    }else{
        $sql = "INSERT INTO user ";
        $sql .= "(Firstname, Lastname, Email, Password) ";
        $sql .= "VALUES (";
        $sql .= "'" . $fname . "',";
        $sql .= "'" . $lname . "',";
        $sql .= "'" . $email . "',";
        $sql .= "'" . $password . "'";
        $sql .= ")";
        $result = mysqli_query($db, $sql);
        header("Location: ../../frontend/login.php");
        echo $result;
    }
}
?>