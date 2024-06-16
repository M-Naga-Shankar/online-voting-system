<?php
include("configASL.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:indexv.php");
}
$aid=$_SESSION['aid'];
$x=mysqli_query($al,"select * from admin where aid='$aid'");
$y=mysqli_fetch_array($x);
$name=$y['name'];

if(!empty($_POST))
{
	$fc=$_POST['fc'];
	$sub=$_POST['sub'];
	$subb=$_POST['subb'];
	$faculty_id = uniqid();
	$u=mysqli_query($al,"insert into election(el_id,title,	description,x) values('$fc','$sub','$subb','0')");
	if($u==true)
	{
		?>
        <script type="application/javascript">
		alert('Successfully added');
		</script>
        <?php }
    else{
        	?>
        <script type="application/javascript">
			alert('Error Found. please Enter a vaild data');
		</script>
        <?php
        
    }
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
	padding:5px;
}
    </style>

<title>Online Voting System</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="styler.css">
  <link rel="stylesheet" type="text/css" href="example4.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
    </div>
        <div class="home_content" style="    background: linear-gradient(135deg, #71b7e6, #9b59b6); overflow: scroll;">
<br>
<br>
    <center>

         <div class="container">
    <div class="title">Start or Stop</div><br><br><br>

    <div class="content" style="display: inline-flex;">

        <div class="button" style="display: inline-flex;">
          <input type="button" value="Start" style="width: 150px;   height: 100%;

   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;

   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
   " onClick="window.location='start.php'">
        </div>
          <div class="button">
          <input type="button" value="Stop" style="width: 150px;   height: 50px;
margin-left: 100px;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
   " onClick="window.location='stop.php'">
        </div>
          <div class="button">
          <input type="button" value="Restart" style="width: 150px;   height: 100%;
  margin-left: 100px;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);"
   onClick="window.location='restart.php'">
   
        </div>
        <br>
      </form>
    </div>
    <br>
    <br>
  </div>

<br>
<br>


     <div class="container">
    <div class="title">Election On</div><br><br>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
              
            <span class="details">Election Id</span>
            <input type="number" placeholder="Enter Party name" name="fc" required>
          </div>
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text" placeholder="Enter Candidate Name" name="sub" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" placeholder="Enter Candidate Id" name="subb" required>
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
  <div class="title">Added Election</div>
    <br>
<br>

	<table border="0" cellpadding="3" cellspacing="3">
    <tr style="font-weight:bold;">
    <td>Sr. No.</td>
    <td>Election Id</td>
    <td>Title</td>
    <td>description</td>
    <td>Default</td>

    <td>Delete</td>
    
    </tr>
    <?php
	$sr=1;
	$h=mysqli_query($al,"select * from election");
	while($j=mysqli_fetch_array($h))
	{
		?>
        <tr>
        <td><?php echo $sr;$sr++;?></td>
        <td><?php echo $j['el_id'];?></td>
        <td><?php echo $j['title'];?></td>
        <td><?php echo $j['description'];?></td>
       <td align="center"><a href="set.php?ele=<?php echo $j['el_id'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:18px;color:green;">Set</a></td> 
       
        <td align="center"><a href="deletee.php?ele=<?php echo $j['el_id'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:18px;color:rgba(255,0,4,1.00);">[x]</a></td> 
        </tr>
     <?php } ?>
     </table>
     <br>

</div>
<br>
<br>
</div>



<br>
<br>


<br>
<br>
 

    </div>
    
   </center>
</body>
</html>