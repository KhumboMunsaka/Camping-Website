<?php
// to check if the inputs are empty
function emptyInputSignup ($firstname, $lastname, $email, $number, $password) {
    $result = true;

    if(empty($firstname) || empty($lastname) || empty($email)|| empty($number)|| empty($password)) {
    $result = true;
    } else {
        $result = false;
    }
    return $result;
};

function invalidEmail ($email) {
    $result = true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result= true;
    } else {
        $result = false;
    }
    return $result;
};

// to check if the email is already in the database
function emailExists($conn, $email) {
$sql = 'Select * from users where email = ?';;
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
 header("location: ../sign-up.php");
   exit();
}

mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)) {
return $row;
} else {
    $result = false;
    return $result;
}

mysqli_stmt_close($stmt);
}

// to register a new user
function createUser($conn, $email) {
$sql = 'insert into users () values ();?';;
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
 header("location: ../sign-up.php");
   exit();
}

mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)) {
return $row;
} else {
    $result = false;
    return $result;
}

mysqli_stmt_close($stmt);
}