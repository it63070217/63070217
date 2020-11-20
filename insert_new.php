<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070217.mysql.database.azure.com', 'it63070217@it63070217', 'it-63070217', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$ID = $_POST['ID'];
$name = $_POST['Name'];
$text = $_POST['Comment'];
$link = $_POST['Link'];
$sql = "UPDATE guestbook SET Name='$name', Comment='$text', Link='$link' WHERE ID='$ID'";


if (mysqli_query($conn, $sql)) {
    echo '<div class="container">
            <h3>Comment has been updated successfully.</h3>
            <a role="button" class="btn btn-primary mt-3" href="show.php">Home</a>
         </div>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>