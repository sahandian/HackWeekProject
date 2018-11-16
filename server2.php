
<?php
session_start();

if (isset($_POST['add_exp'])) {
  // receive all input values from the form
  $expense = mysqli_real_escape_string($db, $_POST['expense']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $email = mysqli_real_escape_string($mysqli, $_SESSION['email']);
  

  if (empty($expense)) { array_push($errors, "Expense Type is required"); }
  if (empty($amount)) { array_push($errors, "Amount is required"); }

 
  	

  	$query = "INSERT INTO expenses (email, type, amount) 
  			  VALUES('$email','$expense', '$amount')";
  	mysqli_query($db, $query);
  	
  	header('location: index.php');
  
    

}
?>