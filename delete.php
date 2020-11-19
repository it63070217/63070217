<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070217.mysql.database.azure.com', 'it63070217@it63070217', 'it-63070217', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id=$_REQUEST['id'];
$query = "DELETE FROM guestbook WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: show.php"); 
?>
