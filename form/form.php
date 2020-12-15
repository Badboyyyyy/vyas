<script>
  alert("Thanks for submitting your response");
</script>

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

