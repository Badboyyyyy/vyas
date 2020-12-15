<?php
$error='';
$name='';
$fname='';
$pnumber='';
$wnumber='';
$gendre='';
$class='';
$programe='';
$testdate='';
   function clean_text($string){
      $string=trim($string);
      $string=stripslashes($string);
      $string=htmlspecialchars($string);
      return $string;
   }
  if(isset($_POST["submit"]))
  {
     $name=clean_text($_POST["name"]);
     $fname=clean_text($_POST["fname"]);
     $pnumber=clean_text($_POST["pnumber"]);
    
     $gendre=clean_text($_POST["gender"]);
     $class=clean_text($_POST["class"]);
     $programe=clean_text($_POST["programe"]);
     $testdate=clean_text($_POST["testdate"]);

     $file_open=fopen("data.csv", "a");
     $no_row=count(file("data.csv"));
       if($no_row>1){
       	  $no_row= ($no_row-1) +1;
       }
       $form_data=array(
       	'name' => $name,
         'fname' => $fname,
         'pnumber' => $pnumber,
          'wnumber' => $wnumber,
         'class' => $class,
          'programe' =>$programe,
         'testdate' => $testdate,
        );
       fputcsv($file_open, $form_data);
       ?>
       <script>
         alert("Thanks for contacting us");
       </script>
       <?php
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title> VyasEdification</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	</head>
  <style>
    body{
      background-color: #fbb034;
     background-image: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%);
    }
  </style>
<body>
  <div class="row">
    <div class="col-4" style="width:20vw;">
      <a class="navbar-brand" href="../index.html">
            <img src="../images/edifi.png.png"style="width:170px;height:50px" alt="">
      </a>
      <img src="../images/form1.svg">
    </div>
    <div class="col-8" style="width:80vw">
      <form action="" method="POST" enctype="multipart/form-data">
	      <div class="card card-body" style="margin:2em; background-color:black; opacity: 0.8; color:white">
	             
	             <h3 class="card-header text-center" style=" background-color: #fbb034;
     background-image: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%);">Personal info</h3>
                        <div class="form-group add_top_30">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control required" style="border-radius:15px">
                        </div>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" name="name" id="Name" class="form-control required" style="border-radius:15px">
                        </div>
                        <div class="form-group">
                            <label for="Fname">Father's name</label>
                            <input type="text" name="fname" id="Fname" class="form-control required" style="border-radius:15px">
                        </div>
                        <div class="form-group">
                        	<label for="Pnumber">Phone Number</label>
                        	<input type="number" name="pnumber" id="Pnumber" class="form-control required" style="border-radius:15px">
                        </div>
                        <div class="form-group">
                        	<label for="Wnumber">Whatsapp Number</label>
                        	<input type="number" name="wnumber" id="Wnumber" class="form-control required" style="border-radius:15px">
                        </div>
                        <div class="form-group">
                        	<label for="">Targeting For</label>
                        	<select name="gender" id="gender" class="form-control" style="border-radius:15px">
                        		<option>Choose</option>
                        		<option>IIT-JEE</option>
                        		<option>NEET(Medical)</option>
                        		<option>PRE-NURTURE(5th to 10th)</option>
                        		<option>OTHERS</option>
                        	</select>
                        </div>
                         <div class="form-group">
                        	<label for="">CLASS</label>
                        	<select name="class" id="class" class="form-control"style="border-radius:15px">
                        		<option>Choose</option>
                        		<option>11th(10th and 12th moving student)</option>
                        		<option>12th(10th and 12th moving student)</option>
                        		<option>12th Pass(12th Dropper/Repeater student)</option>
                        		<option>10th</option>
                        		<option>9th</option>
                        		<option>8th</option>
                        		<option>7th</option>
                        		<option>6th</option>
                        		<option>5th</option>
                        	</select>
                        </div>
                        <div class="form-group">
                        	<label for="">PROGRAME</label>
                        	<select name="programe" id="programe" class="form-control" style="border-radius:15px">
                        		<option>Choose</option>
                        		<option>ONLINE</option>
                        		<option>ONLINE+CLASSROOM(OFFLINE)</option>
                        	</select>
	                    </div>
                        <div class="form-group">
                        	<label for="">TEST DATE</label>
                        	<select name="testdate" id="testdate" class="form-control" style="border-radius:15px">
                        		<option>Choose</option>
                        		<option>7 DECEMBER 2020</option>
                        		<option>13 DECEMBER 2020</option>
                        		<option>20 DECEMBER 2020</option>
                        		<option>27 DECEMBER 2020</option>		
                        	</select>
                        </div>
                        <div>
                        	<p>Declaration --I hereby declareThat in case of my selection in Medical / Engineering Entrance Exams / NTSE & Olympiads, the institute reserves the right to use my name, photo and other information for publicity purpose.That all the information furnished by me in the ONLINE Application Form or in any other form etc. is correct to the best of my knowledge. I understand that in the event of any information found to be incorrect or false, my admission may be cancelled without any refund of fee. </p>
                        	<div class="form-group">
                        		<input type="checkbox" name="" class="input-form-check">
                        		<label class="input-form-lable">I agree</label>
                        	</div>
                        </div>
	                        <input type="submit" name="submit" class="btn btn-success" name="" style=" background-color: #fbb034;
     background-image: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%);">
	                        
	         </div>
	    </form>
    </div>
  </div>

</body>
</html>