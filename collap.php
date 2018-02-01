
<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 <link rel="stylesheet" type="text/css" href="final.css"> 
	<style>
	
	html{	
		 
 
 background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)),url("bg1.jpg");
 background-size:cover;
		
	}

	</style>
	 </head>

   <body>
   <p id ="hey"></p>

   <div class="row">
        <div class="col s12 m6 l3">
			<div class="card  green">
            <div class="card">
				<img src="d.jpg" alt="John" style="width:100%">
					<h1 id ="show_name"></h1>
					<p class="title">CEO & Founder, Example</p>
					  
			</div>
			</div>
		</div>
		<div class="col s12 m6 l9">
			

			
			<ul class="collapsible popout" data-collapsible="accordion">
			
				<li>
				<div class="collapsible-header" style= "background-color: transparent">
					<div class="container ">
						<img src="coffee.jpg" alt="Avatar" style="width:90px">
						<p><span>Coffee</span></p>
						<p>
						<div class="progress" style="height:20px;align:right; width:60%">
							<div class="progress-bar" style="width:40%;height:20px;align:right;"></div>70%
							
						</div>
						</p>
					</div>
				</div>
				<div class="collapsible-body">
					<DIV CLASS="container" style="width:75%;">
					<p>hello</p>
					</div>
				</div>
				</li>
				<li>
				<div class="collapsible-header"style= "background-color: transparent">
					<div class="container">
						<img src="hadoop.jpg" alt="Avatar" style="width:90px">
						<p><span >Hadoop</span></p>
						<div class="progress" style="height:20px;align:right; width:60%">
							<div class="progress-bar" style="width:40%;height:20px;align:right;"></div>70%
							
						</div>
					</div>
				</div>
				<div class="collapsible-body" >
					<DIV CLASS="container" style="width:75%;">
					<p>hello</p>
					</div>
				</div>
				</li>
		
			</ul>
		
		
	
		</div>
	
	
		</div>
		<?php
$con=mysqli_connect('sql12.freemysqlhosting.net','sql12218408','cPqYu5qhCE','sql12218408' );
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql="select * from Status_Rep where name='Kanna'";

$result = mysqli_query($con,$sql);
$rows = mysqli_num_rows($result);


$yourArray = array(); // make a new array to hold all your data


$index = 0;
while($row = mysqli_fetch_assoc($result))
{

?>
	<table>
	
			<tr>
		     <td>

			<div class="row"> <div class="col s12 m6">
				<div class="card blue-grey darken-1">
					<div class="card-content white-text">
		 <span class="card-title"><?php  echo $row['Task']; ?></span>
              <p>I am a very simple card. I am good at containing small bits of information.</p>
          </div>
             
           

           
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a></div></div></div></div>
         
		</td>
			</tr>
			
	
		
		</table>
		
	
		
		<?php  }
		?>
		
		     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="4.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
   </body>
   
   




 </html>