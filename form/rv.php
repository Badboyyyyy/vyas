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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
<?php

$name='';
$number='';
$class='';
   function clean_text($string){
      $string=trim($string);
      $string=stripslashes($string);
      $string=htmlspecialchars($string);
      return $string;
   }
  if(isset($_POST["submit"]))
  { 
     $name=clean_text($_POST["name"]);
   
     $number=clean_text($_POST["mobile"]);
     $class= clean_text($_POST["email"]);
    
     $file_open=fopen("rv.csv", "a");
     $no_row=count(file("rv.csv"));
       if($no_row>1){
          $no_row= ($no_row-1) +1;
       }
       $form_data=array(
        
        'name' => $name,
        
         'number' => $number,
         'class' => $email,
         
        );
       fputcsv($file_open, $form_data);    
       header("location:../index.html");
       ?>
     <script>
   
</script>
       <?php
  }
?> 