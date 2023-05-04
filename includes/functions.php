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
function createUser($conn, $firstname, $lastname, $email, $number, $password) {
    $sql = 'INSERT INTO users (firstname, lastname, email, phone_number, password) VALUES (?, ?, ?, ?, ?)';

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
 header("location: ../sign-up.php");
   exit();
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt, 'sssss', $firstname, $lastname,$email, $number, $hashedPassword);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ../sign-up.php?error=none");
   exit();
}

// FOR THE LOGIN PAGE****************************************************************************
// to check if the inputs are empty
function emptyInputLogin ($email,$password) {
    $result = true;

    if( empty($email)|| empty($password)) {
    $result = true;
    } else {
        $result = false;
    }
    return $result;
};

   function loginUser($conn, $email, $firstname, $pwd) {
        $emailExists = emailExists($conn, $email);
        
        if ($emailExists === false) {
             header('location: ../sign-in.php?error=wronglogin');
        exit();
        }

        $pwdHashed = $emailExists['password'];
        $checkpwd = password_verify($pwd, $pwdHashed);

        if ($checkpwd === false) {
              header('location: ../sign-in.php?error=wronglogin');
              exit();
        } else if ($checkpwd === true) {
            session_start();
            $_SESSION['UserID'] = $emailExists['password'];
            $_SESSION['firstname'] = $emailExists['firstname'];
               header('location: ../Home.php?success');
              exit();
        }                                                                                                   
     };

//   booking_id INT NOT NULL AUTO_INCREMENT,
//   pitch_id INT NOT NULL,
//   user_id INT NOT NULL,
//   booking_start_date DATE NOT NULL,
//   booking_end_date DATE NOT NULL,

    //  BOOKING FUNCTIONS********************************************************************************
   