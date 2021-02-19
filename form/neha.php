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

     $email=($_POST["email"]);
     $name=($_POST["name"]);
     $fname=($_POST["fname"]);
     $pnumber=($_POST["pnumber"]);
     $wnumber=($_POST["wnumber"]);
     $roll= rand(1,1000);
     $target=($_POST["target"]);
     $class=($_POST["class"]);
     $programe=($_POST["programe"]);
     $testdate=($_POST["testdate"]);

         
?> 