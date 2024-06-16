<?php
include("configASL.php");
session_start();
$aid=$_SESSION['aid'];
$x=mysqli_query($al,"select * from voter where UserId='$aid'");
$y=mysqli_fetch_array($x);
$name=$y['name'];
$a=mysqli_query($al,"select * from admin");
$b=mysqli_fetch_array($a);
$el=$b['ele'];
                                             


    
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
                <a href="voterview.php">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>

            </li>
           
            </li>
            <li>
                <a href="about2.html">
                    <i class='bx bxs-user-pin'></i>
                    <span class="links_name">Details</span>
                </a>
                <span class="tooltip">Details</span>

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



<br>
    <div class="slide-container swiper">
            <div class="slide-content">

           
          <?php

    $i=mysqli_query($al,"select * from voter where UserId=$aid");
    while($k=mysqli_fetch_array($i))
    {
        
        ?>
                    <div class="card swiper-slide">
                        <div class="image-content">
         
                            <span class="overlay"></span>

                  
  
                           

                             
                            <div class="card-image">
                            	<?php  if($k['Gender']==Male){
                            		?>
                                <img src="images/man.jpg" alt="" class="card-img">
                            <?php } else{ ?>
                            	    <img src="images/women.jpg" alt="" class="card-img">
                            	<?php } ?>
                            </div>
                        </div>
 
                        <div class="card-content">
                <h2 class="name"><h3><?php echo "Voter Name :".$k['Full_Name']; ?><h3></h2>
                            <br>
                      <p class="description"> <h3> <?php echo "Adhar No. :".$k['AdharNo']; ?></h3></p>
                                          <br>
                           
                      </div>
                    </div>
 <?php  } ?>
                </div>
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
              <p>  <h2 class="name"><h3><?php echo "Candidate Name :".$j['s1']; ?></h3></h2></p>

                           
                       <p>      <h2 class="name"><h3><?php echo "Party Name :".$j['name']; ?></h3></h2></p>
                 
                            <button class="button">   <a href="Vote.php?vote=<?php echo $j['id'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:18px;color:white;">Vote</a></button>
                      </div>
                    </div>
 <?php  } ?>
                </div>
            </div>

         <div class="swiper-button-next swiper-navBtn"  style="color: white;"></div>
            <div class="swiper-button-prev swiper-navBtn" style="color: white;"></div>
            <div class="swiper-pagination"></div>

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


</div>
</body>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</html>