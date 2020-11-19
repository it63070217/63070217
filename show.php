<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070217.mysql.database.azure.com', 'it63070217@it63070217', 'it-63070217', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><a href="delete.php?ID=<?php echo $Result["ID"]; ?>"><button class="btn-del" style="background-color: rgb(100,150,200);">ลบ</button></a>
    <a href="edit.php?ID=<?php echo $Result["ID"]; ?>"><button class="btn-edit" style="background-color: rgb(100,150,200);">แก้ไข</button></a></td>
  </tr>
<?php
}
?>
</table>
<a href="https://63070217.azurewebsites.net/form.html"><button style="background-color: rgb(200,50,50);">เพิ่ม</button></a>
<?php
mysqli_close($conn);
?>
</body>
</html>
