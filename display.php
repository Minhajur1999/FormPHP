<?php
include 'connect.php';

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



<div class="container">
<div class="col-lg-12">
<h1 class="text-center "> Display Table Data </h1> <br>

		<table class="table table-striped table-hover table-bordered">
			<tr class="text-center bg-dark  text-white">
				<th> Id </th>
				<th> Username </th>
				<th> Password </th>
				<th> Delete </th>
				<th> Update </th>
			</tr>
			
	<?php
		include 'connect.php';

		
		$q = "select * from fromcard";

		$query = mysqli_query($con , $q);
		
		while($res = mysqli_fetch_array($query)){

	?>
			
			<tr>
				<td> <?php echo $res['id']; ?> </td>
				<td> <?php  echo $res['username']; ?> </td>
				<td> <?php  echo $res['password']; ?> </td>
				<td> <button class="btn-danger btn"> 
				<a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete  
				</a></button> </td>
				
				<td> <button class="btn-info btn"> 
				<a href="update.php?id=<?php  echo $res['id']; ?>" class="text-white">
				Update </a>  </button> </td>
			</tr>
			
			<?php
			  }
			?>
			
		</table>

</div>
</div>



</body>
</html>