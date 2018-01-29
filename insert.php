
<?php

$con=mysqli_connect('sql12.freemysqlhosting.net','sql12218408','cPqYu5qhCE','sql12218408' ); 


if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO tbl (NAME, EID)
        VALUES ('".$_POST["name"]."','".$_POST["eid"]."')";
if($con->query($sql)===TRUE)
{
echo "new record inserted successfully";
echo " <a href=''> View Result</a>";
}else{
echo "Error: ".$sql ."<br>".$con->error;
}
$con->close();
?>