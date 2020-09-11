<?php

//alla DB queries


//Insert_User funktion som kollar ifall användarnamn/email redan existerar, om ej, lägg in i databas.
function insert_user($fname, $lname, $email, $password){
    global $db;

    $sql_u = "SELECT * FROM user WHERE Firstname='$fname'";
    $sql_e = "SELECT * FROM user WHERE Email='$email'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        $name_error = "Sorry... username already taken";
        echo $name_error;
        echo "<script type='text/javascript'>alert('$name_error');</script>";
        //header("Location: ../../frontend/index.php");
        //TODO add ERROR promt

    } else if (mysqli_num_rows($res_e) > 0) {
        $email_error = "Sorry... email already taken";
    } else {
        $sql = "INSERT INTO user ";
        $sql .= "(Firstname, Lastname, Email, Password) ";
        $sql .= "VALUES (";
        $sql .= "'" . $fname . "',";
        $sql .= "'" . $lname . "',";
        $sql .= "'" . $email . "',";
        $sql .= "'" . $password . "'";
        $sql .= ")";
        $result = mysqli_query($db, $sql);
        // header("Location: ../../frontend/login.php");
        echo $result;
        //TODO add SUCCESSFUL promt
    }
}

function login_user($fname, $password){
    global $db;

        $sql = "SELECT id FROM user WHERE Firstname = '$fname' and Password = '$password'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = isset($row['active']);

        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count == 1) {
            //session_register("myusername");
            //$_SESSION['login_user'] = $myusername;
            header("location: ../../frontend/welcome.php");
        }else {
            $error = "Your Login Name or Password is invalid";
            echo "<script type='text/javascript'>alert('$error');</script>";
            //TODO add ERROR promt
        }
}

function insert_post($user_id2, $title2, $body2){
    global $db;

    $sql = "INSERT INTO posts ";
    $sql .= "(user_id, title, body) ";
    $sql .= "VALUES (";
    $sql .= "'" . $user_id2 . "',";
    $sql .= "'" . $title2 . "',";
    $sql .= "'" . $body2 . "'";
    $sql .= ")";

    if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}

function list_user() {
    global $db;

    $sql = "SELECT * FROM user";
    //$sql .= "ORDER BY position ASC";
    $result = mysqli_query($db, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $users;
//    while ($row = mysqli_fetch_assoc($result)) {
//       print_r($row);
//    }
}

function list_posts() {
    global $db;

    $sql = "SELECT * FROM posts";
    //$sql .= "ORDER BY position ASC";
    $result = mysqli_query($db, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;

//    while ($row = mysqli_fetch_assoc($result)) {
//       print_r($row);
//    }
}




?>


