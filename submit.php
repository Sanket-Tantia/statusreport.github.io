<?php
$con=mysqli_connect('sql12.freemysqlhosting.net','sql12218408','cPqYu5qhCE','sql12218408' ); 

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql="select * from tbl";
$qur=mysqli_query($con,$sql);

while($row = mysqli_fetch_array($qur))
 echo"<li>Name: $row[0]</li><li>id:$row[1]</li><li>Location:$row[2]</li><li>Description:$row[3]</li><br/>";

?>