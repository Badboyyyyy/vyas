
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
	#record, #record2{
		margin-left:350px;
	}
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
    <li><a data-toggle="pill" href="#menu3">News</a></li>
  </ul>
  
  <a href="#" class="logout">Logout</a>
</div>
</div>
<div class="col-9">
<div id="main" style="margin-left:300px !important">
	
	<span style="font-size:30px; cursor:pointer;" id = "show" onclick="openNav()">&#9776; </span>
	
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
          <form>
          	<div class="form-group">
          		<label class="custom-file-upload">Upload Image</label>
          		<input type="file" id ="file-upload" name="" class="">
          		<img src="" id="img-preview">
          	</div>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <div class="tab-content">
  	<div class="tab-pane fade" id="record">
  		<button type="button" class="btn btn-success btn-lg" id="load_data">Load Data </button>
 	      <div id= "employee_table"></div> 
  	</div>
  	<div class="tab-pane" id="record2">
  		<button type="button" class="btn btn-success btn-lg" id="load_data2">Load Data </button>
 	<div id= "employee_table"></div>
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
					var table_data = '<table class="table table-bordered table-stripped">';
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
					var table_data = '<table class="table table-bordered table-stripped">';
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


	});
	var CLOUDINARY_URL = "https://api.cloudinary.com/v1_1/dpfvooxcp/upload";
	var CLOUDINARY_UPLOAD_PRESET = "dwc2sn1g"
	var imgPreview = document.getElementById('img-preview');
	var fileUpload = document.getElementById('file-upload');
	
	fileUpload.addEventListener('change', function(event) {
		var file = event.target.files[0];
		var formData = new FormData();
	formData.append('file', file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
		axios({
         url : CLOUDINARY_URL,
         method : 'POST',
         headers: {
         	'Content-Type' : 'application/x-www-form-urlencoded'
         },
         data : formData
     }).then(function (res){
     	imgPreview.src = res.data.secure_url;

     }).catch(function (err){

     })
	
	});
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  document.getElementById("main").style.marginLeft = "350px";
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