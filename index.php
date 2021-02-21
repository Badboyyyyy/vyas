<?php
$conn = new mysqli("localhost", "root", "", "vyas");
if(isset($_POST['submit']))
{
  $image = $_FILES['image']['name'];
  $path = 'admin/iii/'. $image;
  $sql = $conn->query("INSERT INTO slider(carimage) VALUES('$path')");
  if($sql)
  {
    move_uploaded_file($_FILES['image']['tmp_name'], $path);

  }
}

 $result = $conn->query("SELECT carimage FROM slider");
?>
<html>
<title>Vyas edification, Kota’s Best Coaching for IIT-JEE Main + Advanced, NEET-UG, , NTSE, Olympiad, KVPY, CLAT, Competitive Exams.</title>
<meta charset="utf-8">

<meta name="Keywords" content="IIT-JEE, NEET, JEE Main and Advanced Coaching in Kota, Best coaching for IITJEE|NEET in Kota, Vyas Edification Kota, Vyas Kota, Shishir Mittal, SM Sir, IIT,NEET, Chemistry, Physics, Maths, Biology, best medical coaching in India, best Engineering coaching in India, Kota IITJEE|NEET coaching centre, Best coaching institute in India
">
<meta name="description" content="Enrol Now Vyas Edification, Kota, India’s Top Coaching Institute for IIT-JEE (Main and Advanced), NEET, NEET-UG, KVPY, NTSE, IJSO, Olympiads, CLAT, Best and Trusted Faculty Members, Online, Classroom, Residential and Day Boarding Coaching">


<meta property="og:title" content=" Vyas Edification, Kota– Best Coaching for Pre medical NEET-UG,  JEE Main & Advanced, IIT JEE, NTSE, Olympiad & Other Competitive Exams Classroom Courses (Online + Offline), Residential and Day Boarding Coaching ">


<meta property="og:description" content=" Join Vyas Edification Kota, India's Top Most Coaching for, IIT-JEE, JEE Main + Advanced, NEET-UG, NTSE, Board, CLAT, KVPY, Olympiads & Other science and non-science subject exams. Competitive Exam Courses (Online + Classrooms + Residential and Day Boarding Coaching)
">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700&display=swap" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159651659-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159651659-2');
</script>




  
  <link rel="stylesheet" href="css/studiare-assets.min.css">
  <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome/font-awesome.min.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/fonts/elegant-icons/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/fonts/iconfont/material-icons.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script>
  gtag('event', 'conversion', {'send_to': 'AW-627002268/zt03CK6yrPMBEJyX_aoC'});
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-627002268"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-627002268');
</script>
</head>


<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5faabf480a68960861bda619/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

</head>
<style>
  *{
    box-sizing: border-box;
    margin:0px;
    padding:0px;
  }
  body{
    font-family: sans-serif;
    font-size: 16px;
  }

 #imgg{
     cursor: pointer;
    }
    .fa-whatsapp  {

  background:
  linear-gradient(#25d366,#25d366)10px 84%/10px 15px no-repeat,
  radial-gradient(#25d366 60%,transparent 0);
}

 li > a i{
  color:#ffffff !important;
}
#navtab li{
            margin-right:10px;
            background-color:#f5f5f5;
            border-radius:10px;
            width:20px;
            box-shadow:0px -4px 5px 0px rgba(0,0,0,0.15);
          }
          #navtab li a{
            color:black;

          }
          #navtab li a:hover{
            background-color:white;
            color: #ff6200;
            font-weight:bold;
          }
    nav{
    background: #222;
    padding:0 15px;
  }
  nav a{
    text-decoration: none;
    color:white;
  }
 .menu, .submenu{
  list-style: none;
 }
.logo , .item, .item .button{
  padding:1rem;
}
.item:not(.button) a:hover,
.item a:hover::after{
  color:#ccc;
}
/* Mobile viwe*/
.menu{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}
.menu li a{
  display: block;
  padding:  5px;

}
.menu li.subitem a{
  display: block;
  padding:5px;
}
.toggle{
  font-size: 20px;
  order:1;
}
.item.button{
  order:2;
}
.item{
  order:3;
  width:100%;
  text-align:center;
  display: none;

}
.active .item{

  display: block;
}
.button.secondary{
  border-bottom:2px solid #444;
}
/* Style Submenu */
.submenu{
  display: none;
}
.submenu-active .submenu{
  display: block;
}
.has-submenu > a::after{
  font-family: "font Awesome 5 Free";
  font-size: 14px;
  line-height: 6px;
  font-weight: 900;
  content:"\f078";
  padding:0.4rem;
  color:white;
  text-decoration: none !important;
}
.subitem a{
  padding:10px;
}
.submenu-active {
  background-color:#111;
  border-radius:3px;
}
.events-post{
  margin:2em;
}

@media all and (min-width:1200px){
  
  .menu{
    justify-content: center;
    z-index: 99999;
  }
  .logo{
    flex: 1;
  }
  .item.button{
     width:auto;
     order:1;
    display: block;
   

  }
  .toggle{
    flex:1;
    text-align: right;
    order:2;
  }
  .menu li .button a{
    padding:10px 15px;
    margin:5px 0;
  }
  .button a{
    background: #0080ff;
    border:1px royalblue solid;
  }
  .button.secondary{
    border:0px;
  }
  .button.secondary a{
     background:transparent;
     border:1px #0080ff solid;
  }
  .button a:hover{
    text-decoration: none;
  }
  .button:not(.secondary)a:hover{
    background: royalblue;
    border:darkblue;
  }

}
@media all and (min-width:1370px){

  .item{
    order:1;
    position: relative;
    display: block;
    width: auto;
  }
  .button
  {
    order: 2;
  }
  .submenu-active .submenu{
    display: block;
    position: absolute;
    left: 0px;
    top:68px;
    background: #111;
  }
  .toggle{
    display: none;
  }
  .submenu-active{
    border-radius:0px;

  }
}
@media (max-width:768px)

          {
         
            .grade
            {
              width:100vw;
              overflow-x: scroll;
            }
                      .nav{
                            width:2000px;
                          white-space: nowrap;
                          overflow-x: auto;
                         }
                         .nav li{
                          background-color: #f5f5f5;
                          width:5px;
                          margin-right:10px;
                          box-shadow:0px -4px 5px 0px rgba(0,0,0,0.15);
                         }
                  

          }

</style>
<body>
  <div class="modal fade" id="mymodal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background:rgb(255, 219, 97);">
      <div class="modal-header" style="color:white; opacity:0.7;">
        <h5 class="modal-title"><img src="images/edifi.png.png" style="width:130px;"></h5>
        <h5 style="display:block; margin-left:auto; font-weight:1000; color:rgb(117, 24, 4 )">मेरी सफलता, मेरा विश्वास,<br> अपना VYAS</h5>
       
      </div>
      <div class="modal-body text-white"  style="font-weight:bold; margin:0px; padding:0px">
        <div class="top p-2" style="background-color:#023B09;">
          
          <div class="to" style="display:flex; justify-content: space-between; box-sizing:border-box">
          <div class="left">
            <h3 style="text-align:center; color:white; font-weight:1000;">Appear Online</h3>
            <h3><span class="display-4" style="color:rgb(239, 239, 7 ); font-weight:1000">VYAS</span> <span style="color:white"> Scholarship Admission Test<span style="color:rgb(239, 239, 7 ); font-weight:900"> {V-SAT}</span></h3>
          </div>
          <div class="right" style="margin-top:40px; margin-left:auto"><p style="color:rgb(239, 239, 7)">Upto<span class="display-4" style="font-weight:1000">90%</span></p><p style="color:white; font-weight:1000; font-size:22px">Scholarship</p></div>
          </div>
          <h3 id="date" style="border:3px solid black; border-radius:50px; padding:10px;  margin:auto; background-color:rgb(255, 219, 97); text-align:center; color:rgb(220, 25, 9); font-weight:bold">Exam Date : 14 Feb 2021</h3>
        </div>
        <form  action="form/rv.php" method="POST" class="p-4" style="color:black; font-weight:bold">
            <div class="formm">
            <label>Please enter &nbsp; your &nbsp; name</label> &nbsp; &nbsp;
            <input type="text" name="name">
              </div class="fonmm">
              <div>
              <label>Please enter your number</label> &nbsp; &nbsp;
              <input type="number" name="mobile">
              </div>
             <div class="formm">
              <label>Please enter your &nbsp; class</label> &nbsp; &nbsp; &nbsp;
              <input type="text" name="email">
             </div>    
           <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right; margin:10px">Close</button>
        <input type="submit" name="submit" value="save" class="btn btn-success"  style="float:right; margin:10px" onclick="validate()">
       
      </div>
      <div class="modal-footer" style="background-color:#023B09; color:white;">     
   
        <h4 style="color:white; font-weight:bold; margin-right:auto">Call : 8306007350, 51, 52, 53</h4>
        <p  style="color:white; margin-right:auto">Timing : 9 AM to 6 PM </p>
      </div>
  </form>
    </div>
  </div>
</div>
  <nav class="fixed-top">
    <ul class="menu">
      <li class="logo"><a href="index.php"><img src="images/edifi.png.png" style="width:130px"></a></li>
      <li class="item"><a href="about.html">About</a></li>
      <li class="item has-submenu"><a href="#">Why Vyas</a>
         <ul class="submenu">
            <li class="subitem"><a href="ideas.html">Idea Behind Vyas</a></li>
            <li class="subitem"><a href="edge.html">Vyas Edge</a></li>
        </ul>
      </li>
      <li class="item has-submenu"><a href="#">Courses Fee</a>
        <ul class="submenu">
          <li class="subitem"><a href="blog-grid-rightsidebar.html">Fee Classroom Program</a></li>
          <li class="subitem"><a href="blog-list-rightsidebar.html">Web Scholarship</a></li>
        </ul>
      </li>
      <li class="item"><a href="courses.html">Courses</a></li>
      <li class="item has-submenu">
        <a href="#">Students & Parents</a>
        <ul class="submenu">
          <li class="subitem"><a href="blog.html">Message to students</a></li>
          <li class="subitem"><a href="messagetoparent.html">Message to parents</a></li>
          <li class="subitem"><a href="dayatvyas.html">A day At Vyas</a></li>
          <li class="subitem"><a href="vyas-vs-novyas.html">Vyas vs no Vyas</a></li>
        </ul>
      </li>
      <li class="item"><a href="contact.html">Contact</a></li>
      <li class="item"><a href="https://pages.razorpay.com/pl_GOHlmzCwwv04Au/view">V-sat</a></li>
      <li class="item button"><a href="#">Apply Now</a></li>
      <li class="item button secondary"><a href="#">Pay Fee</a></li>
      <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
      <li class="item"><a href="https://wa.me/message/FLAQUTPF7353K1" target="_blank"><i class="fab fa-whatsapp fa-7x" style="font-size:32px; color:white"></i></a></li>
    </ul>
  </nav>



      <!-- END REVOLUTION SLIDER -->
      <section id="home-section" style="margin-top:9vh">
<div class="carousel slide" data-ride="carousel" id="second">
        <ol class="carousel-indicators">
          <?php
          $i =0;
          foreach($result as $row) {
            $actives = '';
            if($i  ==0)
            {
              $actives = 'active';
            }
            ?>
            
          
              <li data-target="#second" data-slide-to="<?php= $i; ?>"
               class="<?php $actives; ?>"></li>
              <?php $i++; } ?>
              
            
           
        </ol>
         
        <div class="carousel-inner m-auto">
            <?php
          $i =0;
          foreach ($result as $row) {
            $actives = '';
            if($i==0)
            {
              $actives = 'active';
            }
            ?>
          <div class = "carousel-item <?php echo $actives; ?>" data-interval="2000">
            <img src= "<?php echo $row['carimage']; ?>"class="d-block" style="height:100%; width:100%">
           
          </div>
                    <?php $i++; } ?> 
        </div>
        <div>
        
           <a class="carousel-control-prev" href="#second" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#second" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        </div>

      </div>
    
        

    
      
      <!-- END REVOLUTION SLIDER -->
    </section>
    <section class="feature-section" style="padding-top:1px">
      <div class="container">
        <div class="feature-box">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="feature-post">
                <div class="icon-holder">
                  <i class="fa fa-umbrella"></i>
                </div>
                <div class="feature-content">
                  <h2>
                    Online Program
                  </h2>
                  <p>Online Classroom Program for JEE/NEET/Boards is a comprehensive and exhaustive online program conducted by kota's best teachers.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="feature-post">
                <div class="icon-holder color2">
                  <i class="fas fa-vr-cardboard"></i>
                </div>
                <div class="feature-content">
                  <h2>
                    Classroom Program
                  </h2>
                  <p>Year long classroom program for iit jee, neet and pre foundation</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="feature-post">
                <div class="icon-holder color3">
                  <i class="fa fa-handshake-o"></i>
                </div>
                <div class="feature-content">
                  <h2>
                    Residential Program
                  </h2>
                  <p>Residential program 
Vyas edification is first among all institutions in kota to provide residential coaching for iit jee,Neet and boards.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      

  
     <div class="grade" style="margin:30px 0px">
    <ul class="nav nav-tabs nav-justified mx-3" id="navtab">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab"  href="#iit">IIT </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#neet">Neet </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#fivethh">Grade 5th</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#fiveth">Grade 6th  </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#sevthh">Grade 7th  </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab"  href="#sevth">Grade 8th</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#expo"> Grade 9th</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#expoo">Grade 10th</a>
        </li>    
    </ul>
         </div>


      
      <div class="tab-content py-3">  
        <div class="tab-pane fade show active" id="iit">
    <section class="popular-courses-section">

      
          <!----------------------------------------------IIT courses start-------------------------------------------------------------------->
          <div class="card" id="iit1" style="padding:none">
            <div class="row">
              <div class="col-12 col-lg-3 col-md-6 center">
                <div class="course-post">
                  <div class="course-thumbnail-holder">
                    <a href="pathfinder.html">
                      <img src="images/pathfinderj.png" alt="">
                    </a>
                  </div>
                  <div class="course-content-holder">
                    <div class="course-content-main">
                      <h2 class="course-title">
                        <a href="pathfinder.html"><b>Path Finder</b></a>
                        <p>Who can apply: 10th to 11th moving students</p>
                        <p>Duration:  2 Year</p>
                      </h2>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
                       <!---------------------------------------------First column end---------------------------------------------------------------------->
              <div class="col-12 col-lg-3 col-md-6 center">
                <div class="course-post">
                  <div class="course-thumbnail-holder">
                    <a href="pathachiever.html">
                      <img src="images/pathachieverj.png" alt="">
                    </a>
                  </div>
                  <div class="course-content-holder">
                    <div class="course-content-main">
                      <h2 class="course-title">
                        <a href="single-course.html"><b>Path Achiever</b></a>
                        <p>Who can apply: 11th to 12th moving students</p>
                        <p>Duration:  1 Year</p>
                      
                      </h2>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
                        <!--------------------------------------Second column end---------------------------------------------------------------------------->
              <div class="col-12 col-lg-3 col-md-6 center">
                <div class="course-post">
                  <div class="course-thumbnail-holder">
                    <a href="pathbreaker.html">
                      <img src="images/pathbreakerj.png" alt="">
                    </a>
                  </div>
                  <div class="course-content-holder">
                    <div class="course-content-main">
                      <h2 class="course-title">
                        <a href="pathbreaker.html"><b>Path Breaker</b></a>
                        <p>Who can apply: 12th passed students</p>
                        <p>Duration:  1 Year</p>
                      
                      </h2>
                      
                    </div>
                    
                  </div>
                </div>
              </div>        
               </div>
        <!------------------------------------------------------------------Row end------------------------------------------------------------------>
        <!---------------------------------------------------------------Row start----------------------------------------------------------------->
        <!-------------------------------------------------------------Col start--------------------------------------------------------------------->
            
          </div>
          <!-----------------------------------------------------Col end-------------------------------------------------------------------->
                    
    </section>
  </div>
  
    <!------------------------------------------------------------------IIT courses End------------------------------------------------------------------>
    <!---------------------------------------------------------------------Neet Section Start------------------------------------------------------------>
    <div class="tab-pane" id="neet">
    <section class="popular-courses-section">

      
          <!----------------------------------------------IIT courses start-------------------------------------------------------------------->
          <div class="card" id="neet1" style="padding:none">
            <div class="row">
              <div class="col-12 col-lg-3 col-md-6 center">
                <div class="course-post">
                  <div class="course-thumbnail-holder">
                    <a href="pathfinderr.html">
                      <img src="images/pathfindern.png" alt="">
                    </a>
                  </div>
                  <div class="course-content-holder">
                    <div class="course-content-main">
                      <h2 class="course-title">
                        <a href="pathfinder.html"><b>Path Finder</b></a>
                        
                        <p>Who can apply: 10th to 11th moving students</p>
                        <p>Duration:  2 Year</p>
                      </h2>
                      </h2>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
                       <!---------------------------------------------First column end---------------------------------------------------------------------->
              <div class="col-12 col-lg-3 col-md-6 center">
                <div class="course-post">
                  <div class="course-thumbnail-holder">
                    <a href="pathachieverr.html">
                      <img src="images/pathachievern.png" alt="">
                    </a>
                  </div>
                  <div class="course-content-holder">
                    <div class="course-content-main">
                      <h2 class="course-title">
                        <a href="single-course.html"><b>Path Achiever</b></a>
                        <p>Who can apply: 11th to 12th moving students</p>
                        <p>Duration:  1 Year</p>
                      
                      </h2>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
                        <!--------------------------------------Second column end---------------------------------------------------------------------------->
              <div class="col-12 col-lg-3 col-md-6 center">
                <div class="course-post">
                  <div class="course-thumbnail-holder">
                    <a href="pathbreakerr.html">
                      <img src="images/pathbreakern.png" alt="">
                    </a>
                  </div>
                  <div class="course-content-holder">
                    <div class="course-content-main">
                      <h2 class="course-title">
                        <a href="pathbreaker.html"><b>Path Breaker</b></a>
                        <p>Who can apply: 12th passed students</p><br>
                        <p>Duration:  1 Year</p>
                      
                      </h2>
                      
                    </div>
                    
                  </div>
                </div>
              </div>        
               </div>
        <!------------------------------------------------------------------Row end------------------------------------------------------------------>
        <!---------------------------------------------------------------Row start----------------------------------------------------------------->
        <!-------------------------------------------------------------Col start--------------------------------------------------------------------->
            
          </div>
          <!-----------------------------------------------------Col end-------------------------------------------------------------------->
                    
    </section>
      </div>
    <!------------------------------------------------------------------Neet Section over--------------------------------------------------------------->
    <!------------------------------------------------------------------Nature Section Start------------------------------------------------------------>
    <div class="tab-pane" id="nature">
          <section class="popular-courses-section">
                <div class="card" id="nature">
                <div class="row">
                  <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="pathbignner.html">
                          <img src="images/beginner.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="pathbignner.html">Path bigenner</a>
                          </h2>
                          
                        </div>
                        
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="pathachiever.html">
                          <img src="images/pivi.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="single-course.html">Path Initator</a>
                          </h2>
                          <div class="course-rating-teacher">
                            <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
                              <span style="width:100%">
                                <span class=""></span>
                                <span class="votes-number"></span>
                              </span>
                            </div>
                            <a href="#" class="course-loop-teacher"></a>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="single-course.html">
                          <img src="images/explorer.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="single-course.html">Path explorer</a>
                          </h2>
                          <div class="course-rating-teacher">
                            <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
                              <span style="width:100%">
                                <span class=""></span>
                              </span>
                            </div>
                            <a href="#" class="course-loop-teacher"></a>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </section>
    </div>
    <div class="tab-pane" id="fiveth">
          <section class="popular-courses-section">
                <div class="card" id="fiveth">
                <div class="row">
                  <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="pathbignnerr.html">
                          <img src="images/pbvi.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="pathbignnerr.html"><b>Path bigenner</b></a>
                              <p>Who can apply: 5th to 6th moving students</p>
                                   <p>Duration:1 Year</p>

                          </h2>
                          
                        </div>
                        
                      </div>
                    </div>
                  </div>
      
                  
                  
                </div>
              </div>
      </section>
    </div>
    <div class="tab-pane" id="fivethh">
          <section class="popular-courses-section">
                <div class="card" id="fivethh">
                <div class="row">
                  <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="pathbignner.html">
                          <img src="images/pbv.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="pathbignner.html"><b>Path bigenner</b></a>
                            <p>Who can apply: 4th to 5th moving students</p>
                        <p>Duration: 1 Year</p>
                          </h2>
                          
                        </div>
                        
                      </div>
                    </div>
                  </div>
      
                  
                  
                </div>
              </div>
      </section>
    </div>
    <div class="tab-pane" id="sevth">
          <section class="popular-courses-section">
                <div class="card" id="sevth">
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="pathintiatorr.html">
                          <img src="images/pivii.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="pathintiatorr.html"><b>Path Initator</b></a>
                              <p>Who can apply: 7th to 8th moving students</p>
                        <p>Duration: 1 Year</p>
                          </h2>
                          
                        </div>
                        
                      </div>
                    </div>
                  
                  
                </div>
              </div>
      </section>
    </div>
    <div class="tab-pane" id="sevthh">
          <section class="popular-courses-section">
                <div class="card" id="sevthh">
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="pathintiator.html">
                          <img src="images/pivi.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="pathintiator.html"><b>Path Initator</b></a>
                              <p>Who can apply: 6th to 7th moving students</p>
                        <p>Duration: 1 Year</p>
                          </h2>
                          
                        </div>
                        
                      </div>
                    </div>
                  
                  
                </div>
              </div>
      </section>
    </div>
    <div class="tab-pane" id="expo">
          <section class="popular-courses-section">
                <div class="card" id="expo">
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="pathexploro.html">
                          <img src="images/expoix.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="pathexploro.html"><b>Path Exploror</b></a>
                              <p>Who can apply: 8th to 9th moving students</p>
                        <p>Duration:1 Year</p>
                          </h2>
                          
                        </div>
                        
                      </div>
                    </div>
                  
                  
                </div>
              </div>
      </section>
    </div>
    <div class="tab-pane" id="expoo">
          <section class="popular-courses-section">
                <div class="card" id="expoo">
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="pathexploroo.html">
                          <img src="images/expox.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="pathexploroo.html"><b>Path Exploror</b></a>
                              <p>Who can apply: 9th to 10th moving students</p>
                        <p>Duration: 1 Year</p>
                          </h2>
                          
                        </div>
                        
                      </div>
                    </div>
                  
                  
                </div>
              </div>
      </section>
    </div>
    <div class="tab-pane" id="nature">
          <section class="popular-courses-section">
                <div class="card" id="nature">
                <div class="row">
                  <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="single-course.html">
                          <img src="images/beginner.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="pathfinder.html">Path bigenner</a>
                          </h2>
                          <div class="course-rating-teacher">
                            <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
                              <span style="width:100%">
                                <span class=""></span>
                                <span class="votes-number"></span>
                              </span>
                            </div>
                            <a href="#" class="course-loop-teacher"></a>
                          </div>
                        </div>
                        <div class="course-content-bottom">
                          <div class="course-students">
                            <i class="material-icons"></i>
                            <span></span>
                          </div>
                          <div class="course-price">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="pathachiever.html">
                          <img src="images/pi1.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="single-course.html">Path Initator</a>
                          </h2>
                          <div class="course-rating-teacher">
                            <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
                              <span style="width:100%">
                                <span class=""></span>
                                <span class="votes-number"></span>
                              </span>
                            </div>
                            <a href="#" class="course-loop-teacher"></a>
                          </div>
                        </div>
                        <div class="course-content-bottom">
                          <div class="course-students">
                            <i class="material-icons"></i>
                            <span></span>
                          </div>
                          <div class="course-price">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12 col-lg-3 col-md-6 center">
                    <div class="course-post">
                      <div class="course-thumbnail-holder">
                        <a href="single-course.html">
                          <img src="images/explorer.png" alt="">
                        </a>
                      </div>
                      <div class="course-content-holder">
                        <div class="course-content-main">
                          <h2 class="course-title">
                            <a href="single-course.html">Path explorer</a>
                          </h2>
                          <div class="course-rating-teacher">
                            <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
                              <span style="width:100%">
                                <span class=""></span>
                              </span>
                            </div>
                            <a href="#" class="course-loop-teacher"></a>
                          </div>
                        </div>
                        <div class="course-content-bottom">
                          <div class="course-students">
                            <i class="material-icons"></i>
                            <span></span>
                          </div>
                          <div class="course-price">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </section>
    </div>
  </div>
       <section class="news-section">
      <div class="container">
        <h1 class="text-center"style="color:#36648B;font-size:45px"><b><u>Latest News</u></b></h1>
        <div class="title-section">
          <div class="left-part">
            
          </div>
          <div class="right-part">
            
          </div>
        </div>
        <div class="news-box">
          <div class="row">
            <div class="col-lg-3 col-md-6 center">
              <div class="blog-post">
                <img src="images/slide33.jpg" style="height:200px" alt="">
                <div class="post-content">
                  <a class="category" href="#">Economic Times</a>
                  <h2><a href="https://economictimes.indiatimes.com/industry/services/education/nta-to-conduct-net-neet-jee-mains-exams/articleshow/64896793.cms" target="_blank">NTA to conduct JEE,NEET twice a year</a></h2>
                  <div class="post-meta date">
                    <i class="material-icons"></i> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 center">
              <div class="blog-post">
                <img src="images/slide4.jpg" style="height:200px" alt="">
                <div class="post-content">
                  <a class="category" href="#">Economic Times</a>
                  <h2><a href="https://economictimes.indiatimes.com/industry/services/education/iit-delhi-tops-mhrd-mandate-enrols-16-girls-in-all-its-courses/articleshow/64864166.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst" target="_blank">IIT-Delhi tops MHRD mandate,enrols 16% girls.</a></h2>
                  <div class="post-meta date">
                    <i class="material-icons"></i> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 center">
              <div class="blog-post">
                <img src="images/slide3.jpg" style="height:200px" alt="">
                <div class="post-content">
                  <a class="category" href="#">Economoc Times</a>
                  <h2><a href="https://economictimes.indiatimes.com/industry/services/education/page-1-iits-creating-seats-to-lift-gender-ratio-_-industry-welcomes-move-to-lift-gender-ratio/articleshow/62547957.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst" target="_blank">IITs creating extra seats for women.</a></h2>
                  <div class="post-meta date">
                    <i class="material-icons"></i> 
                  </div>
                </div>
              </div>
            </div>
            
            
        </div>
      </div>
    </section>

      <section class="about-section">
      <div class="container">
        <h1 class="text-center"style="color:#36648B;font-size:45px">From the Director's Desk</h1>
        <br>
        <div class="about-article">
          <div class="row">
            <div class="col-lg-6">
              <video style="width:100%"  loop autoplay controls playsinline src="sir.mp4"></video>
            </div>
            <div class="col-lg-6">
              <div class="article-content" style="width:100%">
                
                
                              <p style="text-align:center; font-size:20px; line-height: 1.35em"> 
                  “VYAS aims to develop genuinely inclusive, prosperous, and diverse academic opportunities for your child to enlighten the new-age minds and shape future leaders. We have the firm hand on the pulse of children’s requirements and have the best approach to blend the innovation with the most exponential setup for helping millions of parents in getting an excellent education for their child. Behind the VYAS outstanding educational setup, there is a team of young professionals, which understands the needs of today’s child, and possesses the strong adaptability, enthusiasm, and mentoring abilities. We are happy that our inclusive, holistic, and personalized approach and educational setup is not producing the book worms but the most responsible and talented individuals.”</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        </section>

    <!-- footer 
      ================================================== -->
      <footer style="background-color: #11477c;">
        <div class="container">
  
          <div class="up-footer">
            <div class="row">
  
              <div class="col-lg-4 col-md-6">
                <div class="footer-widget text-widget">
                  <a href="index.php" class="footer-logo"> <img src="images/edifi.png.png" style="width:170px; height:50px" alt=""></a>
                  <br>
                  <br>
                  <p>Vyas is an Organization dedicated to blending school education seamlessly with top coaching for IIT-JEE,NEET,KVPY,NTSE,DSO,National Olympiads and similar exams</p>
                  
                  
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.vyasedification.online"><img src="images/play3.svg" style="border-radius:10px; margin:10px"></a>
              </div>
  
              <div class="col-lg-4 col-md-6 mt-4">
                <div class="footer-widget quick-widget">
                  <h2 class="">Quick Links</h2>
                  <ul class="quick-list">
                    <li><a href="https://rzp.io/l/z43ppg1nV">Admission Process</a></li>
                
                    <li><a href="blog-grid-rightsidebar.html">Fee Structure</a></li>
                
                    
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-4">
                <div class="footer-widget text-widget">
                  <h2>Contact Us</h2>
                  
                  
                  <ul>
                    <li>
                      <div class="contact-info-icon">
                        <i class="material-icons">location_on</i>
                      </div>
                      <div class="contact-info-value">141-A, Vyas Edification Lane, Talwandi, Kota, Rajasthan</div>
                    </li>
                    <li>
                      <div class="contact-info-icon">
                        <i class="material-icons">phone_android</i>
                      </div>
                      <div class="contact-info-value">Call Free:  +91 8306007354</div>
                    </li>
                    <li>
                      <div class="contact-info-icon">
                        <i class="material-icons">email</i>
                      </div>
                      <div class="contact-info-value">contact@vyasedification.com</div>
                    </li>
                    <li>
                      <div class="contact-info-icon">
                        <i class="material-icons">phone_android</i>
                      </div>
                      <div class="contact-info-value">Call Free:  +91 8306007350, 51, 52,  53 </div>
                    </li>
                    
                    
                  </ul>
                </div>
              </div>
  
              
  
            </div>
          </div>
  
        </div>
  
        <div class="footer-copyright copyrights-layout-default">
          <div class="container">
            <div class="copyright-inner" >
              <div class="copyright-cell" style="display:inline-block"> &copy; 2020 <span class="highlight">Vyas Edification</span>. Created by Maxifyy</div>
              <div class="social-icon">
                <ul>
                  <li><a href="https://www.facebook.com/vyasedification" class="facebook"><i class="fab fa-facebook"></i></a></li>
              
                  <li><a href="https://www.instagram.com/vyas_edification/"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://www.youtube.com/c/VyasEdification/videos"><i class="fab fa-youtube"></i></a></li>

                  <li><a href="https://t.me/vyased"><i class="fab fa-telegram"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/vyas-edification"><i class="fab fa-linkedin-in" style="font-weight:32px"></i></a></li>

                  
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
  
      </footer>
    <!-- End footer -->

  </div>
  <!-- End Container -->
 

 
  <script>
    const toggle= document.querySelector('.toggle');
    const menu= document.querySelector('.menu');
    function toggleMenu(){
      if(menu.classList.contains("active"))
      {
        menu.classList.remove("active");
        toggle.querySelector("a").innerHTML = "<i class= 'fas fa-bars'></i>";
      }
      else
      {
        menu.classList.add("active");
        toggle.querySelector("a").innerHTML = "<i class = 'fas fa-times'></i>";
      }

    }
    toggle.addEventListener('click', toggleMenu, false);
//submenu
const items = document.querySelectorAll('.item');
function toggleItem()
{
  if(this.classList.contains("submenu-active"))

  {
    this.classList.remove("submenu-active");
  }
  else if(menu.querySelector(".submenu-active"))
  {
    menu.querySelector(".submenu-active").classList.remove(".submenu-active");
    this.classList.add("submenu-active");
  }
  else 
  {
    this.classList.add("submenu-active");
  }

}
for (let item of items)
{
  if(item.querySelector('.submenu'))
  {
    item.addEventListener('click', toggleItem, false);
    item.addEventListener('keypress', toggleItem, false);
  }
}
//close submenu form anywhere in the page
function closeSubmenu(e)
{
  let isClickInside = menu.contains(e.target);
  if(!isClickInside && menu.querySelector('.submenu-active'))
  {
    menu.querySelector('.submenu-active').classList.remove('submenu-active');
  }
}
document.addEventListener('click', closeSubmenu, false);
$(document).ready(function(){
    $("#imgg").click(function(){
      window.open("https://rzp.io/l/WlTsUbi");
    });
   });
 $(window).on('load', function(){
    $("#mymodal").modal('show');
  });
    $("#ff").submit(function(e) {
    e.preventDefault();
});
    if ( window.history.replaceState ) {
       document.getElementById("mymodal").style="none";
    }
  </script>
</body>
</html>
