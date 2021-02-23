
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
	
	.admin{
		display: flex;
		height: 100vh;
		width:100vw;
		margin:auto;
		justify-content: center;
		align-items: center;
	}
	form{
		background: lightgrey;
		border-radius: 10px;
		box-shadow: 5px 5px 4px 5px lightgrey;
		padding:10px;
	}
	#heading{
		font-family: 'Akaya Telivigala', cursive;
		color:rgb(194, 59, 14 );
		font-weight: 1000;
	}
</style>
<script>
	function loginn()
	{
		var a = document.getElementById("name").value;
	var b =  document.getElementById("pass").value;
	var user = "vyas";
	var pass = "vijay";
	if(a== user && b==pass)
{
  window.open("index.php");
}	
else
{
 alert("wrong password")	
}



	}

</script>
</head>
<body>
	
		<div class="admin">
			
			<form name="form" method="post" action="">
				<h1   id="heading">VYAS EDIFICATION</h1>

<h3 class="text-center text-success">Admin Panel</h3>
<div class="form-group">
<label>Email</label>
<input type="text" name="user" class="form-control" id="name">
</div>


<div class="form-group">
<label>Password</label>
<input type="text" name="pass" class="form-control" id="pass">
</div>
<button class=" btn btn-success ml-md-5" onclick = "loginn()" >Submit</button>
<input type="reset" name="reset"  class="btn btn-success ml-md-5">


	

	
</form>

		</div>
	

 

</body>
</html>