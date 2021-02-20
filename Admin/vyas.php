<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
	<div class="container">
		<div class="admin">
			<form name="form" method="post" action="#">

<div class="container col-md-4">

<h3 class="text-center text-success">Login page</h3>
<div class="form-group">
<label>Email</label>
<input type="text" name="user"class="form-control">
</div>


<div class="form-group">
<label>Password</label>
<input type="text" name="pass" class="form-control">
</div>
<input type="submit" name="Submit" class=" btn btn-success ml-md-5">
<input type="reset" name="reset"  class="btn btn-success ml-md-5">


	
</div>
	
</form>

		</div>
	</div>
<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, 'vyas');

if (isset($_POST['Submit'])) {
	

$user=$_POST['user'];

$pass=$_POST['pass'];

$insert=("INSERT INTO `vyas` ( `user`, `pass`) VALUES ('$user', '$pass ');");
$q = mysqli_query($conn, $insert);


if ($q) {
 echo '<script> alert("login successfully");</script>';
 header('location:index.php');
 
}
else{
	echo "Failed try again";
}

}
?>

</body>
</html>