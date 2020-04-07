<?php

include 'connect.php';

		if(isset($_POST['done'])){
			
			$id = $_GET['id'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$q = "update fromcard set id=$id, 
			username='$username', password='$password' 
			where id=$id";
			
			$query = mysqli_query($con , $q);
			
			header('location:display.php');
		}
?>



<html>
<head>
<title>From Card</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

     <div class="col-lg-4 m-auto">
	     <form method="POST">
		    <br><br><div class="card">
			    <div class="card-header bg-dark">
				   <h1 class="text-white text-center "> Update Oparation </h1>
				</div>
				<br>
				 <label>UserName:</label>
				 <input type="text" name="username"> <br><br>
				 
				 <label>Password:</label>
				 <input type="text" name="password`"> <br><br>
				 
				 <button class="btn btn-success" name="done" type="submit"> Update </button><br>		 
			</div>
		 </form>
	 </div>

</body>
</html>