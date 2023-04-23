

 <?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "vgrs";


$conn = new mysqli($servername , $username  , $password ,$db );

if($conn->connect_error)
{
    die("connection fail");

}

$comp = $_POST['comp'];
$vname = $_POST['vname'];
$add = $_POST['addr'];
$des = $_POST['descr'];

$sql= "INSERT INTO `complaintbox` (`comp`, `vname`, `addr`, `descr`) VALUES ('$comp', '$vname', '$add', '$des')";

if($conn->query($sql)==true)
{
  header("Location: notification.php");
}

else{
    echo "erorr";

}

$conn->close();
?>