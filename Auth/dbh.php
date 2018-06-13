<?php

$db = mysqli_connect("localhost", "root", "", "phpchallenge");

if(isset($_POST['register_btn'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);

    if($password == $password2) {
        $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['message'] = "You are now logged in. Welcome!";
        $_SESSION['username'] = $username;
        header("location: ../index.php");
    }else{
        $_SESSION['message'] = "Passwords do not match!";
    }
}


if (isset($_POST['btnLogin'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $query = "SELECT * FROM `users` WHERE `username`='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    $rowCount = mysqli_num_rows($results);
    if ($rowCount > 0) {
        $_SESSION['message'] = "You are now logged in. Welcome!";
        $_SESSION['username'] = $username;
    } else {
        echo "Incorrect username/password combination.";
    }
}

$sessionUser = isset($_SESSION['username']) ? $_SESSION['username'] : '';

?>