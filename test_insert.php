<?php
        $conn = mysqli_init();
            mysqli_real_connect($conn, 'it63070217.mysql.database.azure.com', 'it63070217@it63070217', 'it-63070217', 'test', 3306);
            if (mysqli_connect_errno($conn))
            {
                die('Failed to connect to MySQL: '.mysqli_connect_error());
            }

        $name = $GET['name'];
        $height = $_GET['height'];
        $weight = $_GET['weight'];
        $bmi = $weight/($height*$height)
        $sql = "INSERT INTO Guestbook (name , height, weight, bmi) VALUES ('$name', '$height', '$weight', '$bmi')";
   
        if (mysqli_query($conn, $sql)) {
    header("location:test_show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
        
  
        mysqli_close($conn);
        
?>
