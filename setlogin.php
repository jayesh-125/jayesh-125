


<?php

include("adminpanel.php");
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vgrs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);


// Attempt insert query execution
$sql = "SELECT * FROM `admin` WHERE email='$email' AND password = '$password'";
$result = mysqli_query($link, $sql);
$num = mysqli_num_rows($result);
    if($num == 1){
    
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: admipanel.php");
    exit;
    
} else{
    echo"insert data properly";
    header("Location: adminlogin.php");
}

 
// Close connection
mysqli_close($link);
?>



