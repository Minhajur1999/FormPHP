<?php

include 'connect.php';
error_reporting(0);

if(isset($_POST['done'])){
	
	$username = $_POST['username'];
    $password = $_POST['password'];
	
	$q = "INSERT INTO `fromcard`(`username`, `password`) VALUES ('$username','$password')";
	
	$query = mysqli_query($con , $q);
}
	?>


<html>
<head>
<title>From Card</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

     <div class="col-lg-6 m-auto">
	     <form method="POST">
		    <br><br><div class="card">
			    <div class="card-header bg-info">
				   <h1 class="text-white text-center"> Insert Oparation </h1>
				</div>
				<br>
				 <label>UserName:</label>
				 <input type="text" name="username"> <br><br>
				 
				 <label>Password:</label>
				 <input type="text" name="password`"> <br><br>
				 
				 <button class="btn btn-success" name="done" type="submit"> Submit </button><br>		 
			</div>
		 </form>
	 </div>

</body>
</html>