<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070217.mysql.database.azure.com', 'it63070217@it63070217', 'it-63070217', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$ID=$_get['ID'];
$res = mysqli_query($conn, 'SELECT * FROM guestbook');

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
  <form action = "insert_new.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" value="<?php echo $Result['Name'];?>">
    <input type="text" name = "comment" value="<?php echo $Result['Comment'];?>">
    <input type="text" name = "link" value="<?php echo $Result['Link'];?>">
    <input type="submit" id="commentBtn">
  </form> 
</body>
</html>
