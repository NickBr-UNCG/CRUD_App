<?php 
include 'dpconn.php';
if(isset($_POST['add_employees'])){
	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$age = $_POST['age'];

	if($fname == "" || empty($fname)){
		header('location:index.php?message=You need to fill in the first name.');
}
	
	else{
		$query = "INSERT INTO people (first_name, last_name, age) values ('$fname', '$lname', '$age')";
		$result = mysqli_query($connection, $query);
	}

	

	if(!$result) {
		die("Query failed".mysqli_error());
	}

	else{
		header('location:index.php?insert_msg=Your data has been added successfully');
	}
}
?>