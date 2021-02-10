<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title> Vyas Edification</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  <style>
    body{
      width:100vw;
      height: 100vh;
      background-image:url("bk4.jpg");
      background-size: cover;
      background-image:no-repeat;
    }
     .container{
      margin:0px;
      padding:0px;
      width:360px;
      height:500px;
      margin:8px auto;
      background:#fff;
      border-radius: 5px;
      position: relative;
      overflow:hidden;
     }
     h3{
      text-align: center;
      margin-bottom: 40px;
      color:#777;
     }
     .container #form1, #form2, #form3{
      width:280px;
      position: absolute;
      top:50px;
      left: 40px;
      transition: 0.5s;
     }
     .btn-box{
      margin:30px auto;
      width:100%;
      text-align: center;
     }
     form button , #s1{
      width:200px;
      height: 40px;
      margin:10px;
      background:linear-gradient(to right, #ff105f, #ffad06);
      border-radius: 30px;
      border:0;
      outline: none:
      color:#fff;
      cursor: pointer;
     }

    #form2{
     
      left:450px;
    }
    #form3{
      
      left:450px;
    }
    .step-row{
      width:360px;
      height: 40px;
      margin:0 auto;
      display: flex;
      align-items: center;
      box-shadow: 0 -1px 5px -1px #000;
      position:relative;
    }
    .step-col{
      width:120px;
      text-align: center;
         position: relative;
    }
    #progress{
      position: absolute;
      height:100%;
      width:120px;
       background:linear-gradient(to right, #ff105f, #ffad06);
    }
    #progress::after{
     content:'';
     height: 0;
     width: 0;
     border-top:20px solid transparent;
     border-bottom:20px solid transparent;
     position:absolute;
     right:-20px;
     top:0px;
     border-left:20px solid #ffad06;
    }

  </style>
<body>
   <header>
     <a class="navbar-brand" href="../index.html">
                <img src="../images/edifi.png.png"style="width:170px;height:50px" alt="">
     </a>
   </header>
   <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
        <div id="form1">
             <h3>Personal info</h3>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder= "Please enter your email" style="border-radius:15px">
                            <p id="demo" style="color:red"></p>
                        </div>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" name="name" id="Name" class="form-control" placeholder="Please enter your name" style="border-radius:15px">
                            <p id="demo1" style="color:red"></p>
                        </div>
                        <div class="form-group">
                            <label for="Fname">Father's name</label>
                            <input type="text" name="fname" id="Fname" class="form-control" placeholder="Please enter your father name"  style="border-radius:15px">
                        </div>
                        <div class="btn-box">
                          <button type="button" id="next1">Next</button>
                        </div>
                      </div>
                        <div id="form2">
                          <h3>Contact Details</h3>
                        <div class="form-group">
                          <label for="Pnumber">Phone Number</label>
                          <input type="number" name="pnumber" id="Pnumber" class="form-control"  placeholder="Please enter your phone number" style="border-radius:15px">
                        </div>
                        <div class="form-group">
                          <label for="Wnumber">Whatsapp Number</label>
                          <input type="number" name="wnumber" id="Wnumber" class="form-control"  placeholder="Please enter your whatsapp number" style="border-radius:15px">
                        </div>
                        <div class="form-group">
                          <label for="">Targeting For</label>
                          <select name="target" id="target" class="form-control" style="border-radius:15px">
                            <option>Choose</option>
                            <option>IIT-JEE</option>
                            <option>NEET(Medical)</option>
                            <option>PRE-NURTURE(5th to 10th)</option>
                            <option>OTHERS</option>
                          </select>
                        </div>
                        <div class="btn-box">
                          <button type="button" id="back1">Previous</button>
                          <button type="button" id="next2">Next</button>
                        </div>
                      </div>
                      <div id="form3">
                        <h3> Courses details</h3>
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
                       
                        <div class="form-group">
                          <button type="button" id="back2">Previous</button>
                          <input type="submit" name="submit" id="s1">
                      </div>
                    </div>
                      </form>
             <div class="step-row">
              <div id="progress"></div>
              <div class="step-col"><small>Step1</small>
              </div>
              <div class="step-col"><small>Step2</small>
              </div>
              <div class="step-col"><small>Step3</small>
              </div>
              
             </div>

  </div>
  <script>
    var form1= document.getElementById("#form1");
    var form2= document.getElementById("#form2");
    var form3= document.getElementById("form3");
    var next1= document.getElementById("next1");
    var next2= document.getElementById("next2");
    var prev1= document.getElementById("back1");
    var prev2= document.getElementById("back2");
    var progress = document.getElementById("progress");
    next1.onclick= function (){
      if(document.getElementById("email").value=="")
      {
        var x = "please enter valid email id";
        document.getElementById("demo").innerHTML= x;
      }
      if(document.getElementById("Name").value=="")
      {
        var y = "please enter your name";
        document.getElementById("demo1").innerHTML= y;
      }
      else{
         document.getElementById("form1").style.left="-450px";
      document.getElementById("form2").style.left="40px";
      document.getElementById("progress").style.width= "240px";
      }
     

     }
     prev1.onclick= function(){
     
  
         document.getElementById("form1").style.left="40px";
      document.getElementById("form2").style.left= "450px";
      document.getElementById("progress").style.width="120px";
      }
     
     next2.onclick= function(){
      document.getElementById("form2").style.left="-450px";
      document.getElementById("form3").style.left="40px";
      document.getElementById("progress").style.width="360px";
     }
     prev2.onclick= function(){
      document.getElementById("form2").style.left="40px";
      document.getElementById("form3").style.left="450px";
       document.getElementById("progress").style.width="240px";
     }
  </script>
</body>
</html>

<?php
$error='';
$email='';
$name='';
$fname='';
$pnumber='';
$wnumber='';
$target='';
$class='';
$programe='';
$testdate='';
$roll= '';
   function clean_text($string){
      $string=trim($string);
      $string=stripslashes($string);
      $string=htmlspecialchars($string);
      return $string;
   }
  if(isset($_POST["submit"]))
  { 
     $email=clean_text($_POST["email"]);
     $name=clean_text($_POST["name"]);
     $fname=clean_text($_POST["fname"]);
     $pnumber=clean_text($_POST["pnumber"]);
     $wnumber=clean_text($_POST["wnumber"]);
     $roll= rand(1,1000);
     $target=clean_text($_POST["target"]);
     $class=clean_text($_POST["class"]);
     $programe=clean_text($_POST["programe"]);
     $testdate=clean_text($_POST["testdate"]);
     $file_open=fopen("data.csv", "a");
     $no_row=count(file("data.csv"));
       if($no_row>1){
          $no_row= ($no_row-1) +1;
       }
       $form_data=array(
        'email' => $email,
        'name' => $name,
         'fname' => $fname,
         'pnumber' => $pnumber,
          'wnumber' => $wnumber,
          'target' => $target,
         'class' => $class,
          'programe' =>$programe,
         'testdate' => $testdate,
         'rollNumber' =>$roll
        );
       fputcsv($file_open, $form_data);    
       ?>
        <script>
        swal("Thanks", "Your roll number is '<?php echo $roll ?> ", "success");
      </script>
       <?php
  }
?> 