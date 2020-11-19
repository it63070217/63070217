<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070217.mysql.database.azure.com', 'it63070217@it63070217', 'it-63070217', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$ID=$_GET['ID'];
$result = mysqli_query($con,"DELETE FROM guestbook WHERE ID=$ID");
header("Location: show.php"); 
mysqli_close($conn);
?>
