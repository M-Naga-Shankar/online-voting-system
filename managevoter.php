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
if(!empty($_POST))
{
	$name=$_POST['name1'];
	$urid=$_POST['urid'];
	$adhar=$_POST['adhar'];
    $phone1=$_POST['phone1'];
      $gender=$_POST['gender'];
        $pass=$_POST['pass'];
$u=mysqli_query($al,"insert into voter values('$name','$urid','$adhar','$phone1','$gender',$pass,'0')");
	if($u==true)
	{
		?>
        <script type="application/javascript">
		alert('Successfully added');
		</script>
        <?php }
}		
?>
<!doctype html>
<html>
<head>       
    <style>
    table, tr, td
{
	border:1px solid rgba(0,0,0,1.00);
	border-collapse:collapse;
	border-spacing: 30px;
	font-family:"Trebuchet MS";
	font-size:30px;
	padding:10px;
}
    </style>
<title>Online Voting System</title>
<link href="style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="example4.css">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>     
<link rel="stylesheet" href="styler.css">
</head>
<body >
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
  </div>
      <div class="home_content" style="    background: linear-gradient(135deg, #71b7e6, #9b59b6); overflow: scroll;"> 
            <center>
<br>
<br>
<center>
   <div class="container">
    <div class="title">Registration</div><br><br>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">       
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name1" required>
          </div>
          <div class="input-box">
            <span class="details">User Id</span>
            <input type="number" placeholder="Enter your username" name="urid" required>
          </div>
          <div class="input-box">
            <span class="details">Adhar</span>
            <input type="number" placeholder="Enter your Adhar number" name="adhar" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your Phone number"  name="phone1" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="pass" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="Male">
          <input type="radio" name="gender" id="dot-2" value="Female">
          <input type="radio" name="gender" id="dot-3" value="Other">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
<br>
<br>

     <div class="container">    
  <div class="title">Manage Voter</div>
    <br>
<br>
	<table border="0" cellpadding="3" cellspacing="3">
    <tr style="font-weight:bold;">
    <td>Sr. No.</td>
    <td>&nbsp&nbsp&nbsp&nbspName&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
    <td>&nbsp&nbsp&nbspUser Id&nbsp&nbsp&nbsp </td>
    <td>&nbspAdhar No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </td>
    <td>&nbspPhone NO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
    <td>&nbspPassword&nbsp&nbsp</td>
    <td>&nbspgender&nbsp&nbsp</td>
    <td>&nbspStatus&nbsp</td>
    <td>Delete</td>
    </tr>
    <?php
	$sr=1;
	$h=mysqli_query($al,"select * from voter");
	while($j=mysqli_fetch_array($h))
	{
		?>
        <tr>
        <td><?php echo $sr;$sr++;?></td>
        <td><?php echo $j['Full_Name'];?></td>
        <td><?php echo $j['UserId'];?></td>
        <td><?php echo $j['AdharNo'];?></td>
         <td><?php echo $j['Phone'];?></td>         
          <td><?php echo $j['Password'];?></td>
           <td><?php echo $j['Gender'];?></td>
           <td><?php echo $j['Status'];?></td>
        <td align="center">
          <a href="delete1.php?del1=<?php echo $j['UserId'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:18px;color:rgba(255,0,4,1.00);">[x]</a></td> 
        </tr>
     <?php } ?>
     </table>
     <br>
         <div class="input-box button">
<input type="submit" onClick="window.location='home.php'" value=" Back ">
</div>          
<br>
<br>
</div>
<br>
<br>
</center>
</body>
</html>