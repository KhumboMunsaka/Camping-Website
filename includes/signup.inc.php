<?php
if (isset($_POST["submit"])) {

    $email     = $_POST["email"];
    $firstname = $_POST["firstname"];
    $lastname  = $_POST["lastname"];
    $number    = $_POST["phone_number"];
    $password  = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.php';

    if (emptyInputSignup($name, $lastname, $email, $number, $password) !== false) {
        header("location: ../sign-up.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../sign-up.php?error=invalidemail");
        exit();
    }
    // if (invalidNumber($number) !==false) {
    //     header("location: ../sign-up.php?error=invalidnumber");
    //    exit();
    // }
    if (emailExists($conn, $email) !== false) {
        header("location: ../sign-up.php?error=emailaddressalreadyexists!");
        exit();
    }

    // everything is good? lets create the user
    createUser($conn, $firstname, $lastname, $email, $number, $password);
}