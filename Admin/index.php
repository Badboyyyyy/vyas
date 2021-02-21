<!DOCTYPE html>
<html>
<head>
	<title>Vyas Edification</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <link rel="stylesheet"  href="style.css">
</head>
<style>
	
	#fff{
		display: none;
	}

	input[type="file"] {
    
    position: absolute;
    left:10px;
    opacity: 0;
}
.custom-file-upload {

    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
#load_data, #load_data2{
 display: block;
 padding:10px;
 margin:auto;
}
</style>

</head>
<body>
	<div class="row">
		<div class="col-3">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn"  id = "close" onclick="closeNav()">&times;</a>
 <ul class="nav nav-pills">
    <li><a data-toggle="modal" href="#myModal">Slider</a></li>
    <li><a data-toggle="pill" href="#record">Registered Students</a></li>
    <li><a data-toggle="pill" href="#record2">Enquire Student</a></li>
    <li><a data-toggle="pill" href="#news">News</a></li>
  </ul>
  
  <a href="#" class="logout">Logout</a>
</div>
</div>
<div class="col-9">
<div id="main">
	
	<span style="font-size:30px; cursor:pointer" id = "show" onclick="openNav()">&#9776; </span>
	<div class="tab-content">
  	<div class="tab-pane fade" id="record">
  		<button type="button" class="btn btn-success btn-lg" id="load_data">Load Data </button>
 	      <div id= "employee_table"></div> 
  	</div>
  	<div class="tab-pane" id="record2">
  		<button type="button" class="btn btn-success btn-lg" id="load_data2">Load Data </button>
 	     <div id= "employee_table2"></div>
  	</div>
  	<div class="tab-pane" id="news">
  		<div class= "container">
  			<h1>Post News</h1>
  			<form method="post" action="../test.php" enctype="multipart/form-data"> 
  			<div class="form">
  				<div class="form-group">
  					<label>Please enter title</label>
  					<input type="text" name="title" class="form-control">
  				</div>
  				<div class="form-group">
          		<label class="custom-file-upload">Upload Image</label>
          		<input type="file" id ="file-upload" name="newsimage" class="">
          	</div>
  				<div class="form-group">
  					<label>Enter Url</label>
  					<input type="text" name="newsurl" class="form-control" >
  				</div>
  				<div class="control-group">
  					<input type="submit" name="news" class="btn btn-success">
  				</div>

  			</div>
  		</form>
  		</div>
  	</div>

  </div>
 
	
</div>
</div>

 <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Vyas Edification</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="../test.php" method="post" enctype="multipart/form-data">
          	<div class="form-group">
          		<label class="custom-file-upload">Upload Image</label>
          		<input type="file" id ="file-upload" name="image" class="">
          	</div>
          	<div class="form-group">
          		<input type="submit" value="submit" name="submit" class="form-control btn-success">
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  



<script>
	$(document).ready(function() {
		$("#load_data").click(function() {
			$.ajax({
				url:"../form/data.csv",
				dataType:"text",
				success:function(data){
					var employee_data = data.split(/\r?\n|\r/);
					var table_data = '<table class="table table-bordered bg-dark text-white text-center table-responsive table-stripped">';
					for (var count=0; count<employee_data.length; count++)
					{
						var cell_data = employee_data[count].split(",");
						table_data += '<tr>';
						for(var cell_count =0; cell_count < cell_data.length; cell_count++)
						{
							if(count===0)
							{
								table_data += '<th>'+ cell_data[cell_count]+'<th>';
							}
							else
							{
								table_data += '<td>'+cell_data[cell_count]+'<td>';
							}
						}
						table_data +='<tr>';
					}
					table_data += '</table>';
					$('#employee_table').html(table_data);
				}
			});
		});



$("#load_data2").click(function() {
			$.ajax({
				url:"../form/rv.csv",
				dataType:"text",
				success:function(data){
					var employee_data = data.split(/\r?\n|\r/);
					var table_data = '<table class="table table-bordered bg-dark text-white text-center table-stripped">';
					for (var count=0; count<employee_data.length; count++)
					{
						var cell_data = employee_data[count].split(",");
						table_data += '<tr>';
						for(var cell_count =0; cell_count < cell_data.length; cell_count++)
						{
							if(count===0)
							{
								table_data += '<th>'+ cell_data[cell_count]+'<th>';
							}
							else
							{
								table_data += '<td>'+cell_data[cell_count]+'<td>';
							}
						}
						table_data +='<tr>';
					}
					table_data += '</table>';
					$('#employee_table2').html(table_data);
				}
			});
		});


	});
	
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  
  document.getElementById("show").style.display = "none";
  document.getElementById("close").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("close").style.display = "none";
  document.getElementById("show").style.display = "block";
}






</script>
   
</body>
</html>