<?php
include("configASL.php");
session_start();

$aid=admin;
$x=mysqli_query($al,"select * from admin where aid='$aid'");
$y=mysqli_fetch_array($x);
$name=$y['name'];
$a=mysqli_query($al,"select * from admin where aid='$aid'");
$b=mysqli_fetch_array($a);
$el=$b['ele'];   
   $top=mysqli_query($al,"select MAX(Votes) from nominee");
   $t=mysqli_fetch_array($top);
   $t1=$t['MAX(Votes)'];
      $top1=mysqli_query($al,"select * from nominee where ele='$el' and Votes=$t1");
         
                  while($row=mysqli_fetch_assoc($top1))  
    {  
    
  $topName=$row['s1'];
  $topVote=$row['Votes'];
     }
  
 
?>
<!doctype html>
<html>
<head>

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!--font awesome-->
        <script src="https://kit.fontawesome.com/5a99d1260f.js" crossorigin="anonymous"></script>
    <style>
        body{
          background:linear-gradient(#141e30, #243b55);
        }       
    </style>
<meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="example4.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
        <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                      <i class='bx bxl-vimeo'></i>
                <div class="logo_name">E-Voting</div>
                
            </div>
<i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="search...">
                <span class="tooltip">Search</span>

            </li>
            <li>
                <a href="polling.php">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>

            </li>
           
    
<li>
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log Out</span>
                </a>
                <span class="tooltip">Log Out</span>

            </li>
        </ul>
    </div>
        <div class="home_content" style="    background: linear-gradient(135deg, #71b7e6, #9b59b6);">
        
      <center>


                <div class="card-wrapper swiper-wrapper" style="width: 600px; ">
                    <div class="card swiper-slide" style="margin: 20px;">
                        <div class="image-content">
                      
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/a.jpeg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"><h2>Top position</h2>
                            <br>
                            <p class="description"><h1>Name:<?php echo $topName; ?></h1></p>
                            <br>
                            Total Votes:<?php echo $topVote; ?></h1></p>
                            <button class="button">Top position</button>
                        </div>
                    </div>
                </h2>
            </div>
 <div class="slide-container swiper">
            <div class="slide-content">

              <div class="card-wrapper swiper-wrapper">
          <?php

    $h=mysqli_query($al,"select * from nominee where ele='$el'");
    while($j=mysqli_fetch_array($h))
    {
        
        ?>
                    <div class="card swiper-slide">
                        <div class="image-content">
         
                            <span class="overlay"></span>

                  
  
                            <div class="card-image">

                                <img src="images/ava.png" alt="" class="card-img">
                            </div>
                        </div>
 
                        <div class="card-content">
                <h2 class="name"><h3><?php echo "Candidate Name :".$j['s1']; ?><h3></h2>
                            
                               <p>      <h2 class="name"><h3><?php echo "Party Name :".$j['name']; ?></h3></h2></p>
                                <p>      <h2 class="name"><h3><?php echo "Election ID:".$j['ele']; ?></h3></h2></p>
                  <br>    <p class="description"> <h2> <?php echo "Total votes :".$j['Votes']; ?></h2></p>
                         <br>
                         <br><br>  
                      </div>
                    </div>
 <?php  } ?>
                </div>
            </div>

         <div class="swiper-button-next swiper-navBtn" style="color: white;"></div>
            <div class="swiper-button-prev swiper-navBtn" style="color:white;"></div>
            <div class="swiper-pagination" style="color: white;"></div>

        </div>



    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }

    </script>
  
</body>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</html>