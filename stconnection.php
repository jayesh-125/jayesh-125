


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vgrs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$comp = mysqli_real_escape_string($link, $_REQUEST['comp']);


// Attempt insert query execution
$sql = "SELECT * FROM `complaintbox` WHERE id='$id' AND comp = '$comp'";
$result = mysqli_query($link, $sql);
$num = mysqli_num_rows($result);
    if($num == 1){
    
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['id'] = $id;
    $_SESSION['comp'] = $comp;
    header("Location: his_complaint.php");
    exit;
    
} else{
    echo"insert data properly";
    header("Location: st.php");
}

 
// Close connection
mysqli_close($link);
?>



