<?php

include 'connect.php';

			$id = $_GET['id'];

			$q = "DELETE FROM `fromcard` WHERE id = '$id'";

			mysqli_query($con,$q);

			header('location:display.php');

?>