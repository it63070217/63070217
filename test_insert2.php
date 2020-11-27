<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070217.mysql.database.azure.com', 'it63070217@it63070217', 'it-63070217', 'test', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $weight/($height*$height)

$sql = "INSERT INTO Guestbook (name , height, weight, bmi) VALUES ('$name', '$height', '$weight', '$bmi')";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
