 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vgrs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$phoneno = mysqli_real_escape_string($link, $_REQUEST['phoneno']);
$village = mysqli_real_escape_string($link, $_REQUEST['village']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$cpassword = mysqli_real_escape_string($link, $_REQUEST['cpassword']);


// Attempt insert query execution
if ($password == $cpassword) {
$sql = "INSERT INTO `admin` (`name`, `phoneno`, `village`, `email`, `password` , `cpassword`) VALUES ('$name', '$phoneno', '$village','$email','$password', '$cpassword')";
if(mysqli_query($link, $sql)){
    echo "Your account has been created";
} else{
    echo"data insert properly";
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// Close connection
mysqli_close($link);
?>