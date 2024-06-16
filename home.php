<?php
include("configASL.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$aid=$_SESSION['aid'];
$x=mysqli_query($al,"select * from admin where aid='$aid'");
$y=mysqli_fetch_array($x);
$name=$y['name'];
$a=mysqli_query($al,"select * from admin where aid='$aid'");
$b=mysqli_fetch_array($a);
$el=$b['ele'];
     $sr=0;
      $h=mysqli_query($al,"select * from voter WHERE status=0");
    while($j=mysqli_fetch_array($h))
    {      	
    $sr=$sr+1;
    }                              	  

$voted=$sr;
$sr=0;
    $h=mysqli_query($al,"select * from voter WHERE status=1");
    while($j=mysqli_fetch_array($h))
    {      	
    $sr=$sr+1;
    }   
$vote=$sr;
	
?>
<!doctype html>
<html>
<head>

           <link rel="stylesheet" type="text/css" href="example4.css">
	    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="c.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
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
				<a href="home.php">
					<i class='bx bx-grid-alt' ></i>
					<span class="links_name">Dashboard</span>
				</a>
				<span class="tooltip">Dashboard</span>

			</li>
			<li>
				<a href="newreg.php">
					<i class='bx bx-user' ></i>
					<span class="links_name">New Registration</span>
				</a>
				<span class="tooltip">Registration</span>

			</li>
			
			<li>
				<a href="poll.php">
					<i class='bx bx-analyse'></i>
					<span class="links_name">Results</span>
				</a>
				<span class="tooltip">Results</span>

			</li>
			<li>
				<a href="election.php">
					<i class='bx bxs-cog'></i>
					<span class="links_name">Settings</span>
				</a>
				<span class="tooltip">Settings</span>

			</li>
	
			<li>
				<a href="about1.html">
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
	</div><div class="sidebar">
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
				<a href="home.php">
					<i class='bx bx-grid-alt' ></i>
					<span class="links_name">Dashboard</span>
				</a>
				<span class="tooltip">Dashboard</span>

			</li>
			<li>
				<a href="newreg.php">
					<i class='bx bx-user' ></i>
					<span class="links_name">New Registration</span>
				</a>
				<span class="tooltip">Registration</span>

			</li>
			
			<li>
				<a href="poll.php">
					<i class='bx bx-analyse'></i>
					<span class="links_name">Results</span>
				</a>
				<span class="tooltip">Results</span>

			</li>
			<li>
				<a href="election.php">
					<i class='bx bxs-cog'></i>
					<span class="links_name">Settings</span>
				</a>
				<span class="tooltip">Settings</span>

			</li>
			<li>
				<a href="feed.php">
					<i class='bx bx-edit-alt'></i>
					<span class="links_name">Feedback</span>
				</a>
				<span class="tooltip">Feedback</span>

			</li>
			<li>
				<a href="about1.html">
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
    	<div class="home_content" style="    background: linear-gradient(135deg, #71b7e6, #9b59b6);">
		
            <center>


<br>
<br>
<center>
 <div class="slide-container swiper" style="">
            <div class="slide-content" style="">
                <div class="card-wrapper swiper-wrapper" style="width: 300px; margin-left: -400px;">
                    <div class="card swiper-slide" style="margin: 20px;">
                        <div class="image-content">
                      
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/a.jpeg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"><h2>Voted People</h2>
                            <br>
                            <p class="description"><h1><?php echo $voted; ?></h1></p>
                            <button class="button">Voted</button>
                        </div>
                    </div>

                    <div class="card swiper-slide" style="margin:20px;">
                        <div class="image-content">
                       
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/a.jpeg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"><h2>Not Voted</h2></h2>
                            <br>
                            <p class="description"><h1>
                            	<?php echo $vote ?>
                            </h1></p>
                            <button class="button">Not Voted</button>
                        </div>
                    </div>
                </div>
            </div>

</div>
</div>

</body>
</html>