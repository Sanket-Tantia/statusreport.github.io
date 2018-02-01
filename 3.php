<?php
$con=mysqli_connect('sql12.freemysqlhosting.net','sql12218408','cPqYu5qhCE','sql12218408' );
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['date'])){

  $daate=$_POST['date'];
  $naame=$_POST['name'];
  $sql="select * from Status_Rep where Date='$daate' and Name='$naame'";
  $result = mysqli_query($con,$sql);
  $rows = mysqli_num_rows($result);

  while($row = mysqli_fetch_assoc($result)){
  	$vv=$row['Task'];
  	$sql2="select Task_Icon from Tasks where Task='$vv'";
  	$result2 = mysqli_query($con,$sql2);
  	$row2=mysqli_fetch_assoc($result2);
?>
				<li style="border-bottom:0.2px solid grey">
					<div class="container ">
						<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row2['Task_Icon'] ).'"/ height = "100" width ="100">'?>
						<span class="card-title"><?php  echo $row['Task']; ?></span>
						<div class="progress" style="height:5px;align:right; width:40%; background-color:	#cd5c5c ;">
							<div class="progress-bar" style=" background-color:#228b22; width:<?php echo $row['Progress'];?>%;height:5px;align:right;"></div>70%
						</div>
						<p><?php  echo $row['Description']; ?>	</p>
					</div>
				</li>
	   <?php
   }
}
  ?>
