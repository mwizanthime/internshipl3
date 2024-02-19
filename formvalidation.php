<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    //server-side validation for strong password
    if (validatepassword($password)) {
        //process registration store user data in the database, etc
        echo "registration successful!";
    }
    else{
        echo "invalid password. please provide the strong password";
    }
}
function validatepassword($password){
    //minimum length requirement 
    if (strlen($password < 8)) {
        return false;
    }
    //check for at least one lower case letter 
    if (strlen(!preg_match('/[a-z]/'), $password)) {
        return false;
    }
    //check for at least one upper case letter 
    if (strlen(!preg_match('/[A-Z]/'), $password)) {
        return false;
    }
    //check for at least one digit 
    if (strlen(!preg_match('/\d/'), $password)) {
        return false;
    }
    //check for at least one special character 
    if (strlen(!preg_match('/[\!@#$%^&*()_+{}\[/]:;<>,.?~\\/-]/'), $password)) {
        return false;
    }
    //password meets all criteria
    return true;
}
?>