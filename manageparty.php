<?php
include("configASL.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:indexv.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($al,"select * from admin where aid='admin'");
$b=mysqli_fetch_array($a);
$el=$b['ele'];
$x=mysqli_query($al,"select * from admin where aid='$aid'");
$y=mysqli_fetch_array($x);
$name=$y['name'];

if(!empty($_POST))
{
	$fc=$_POST['fc'];
	$sub=$_POST['sub'];
	$subb=uniqid();
	$nominee_id = uniqid();
	$u=mysqli_query($al,"insert into nominee(nominee_id,name,s1,s2,ele) values('$nominee_id','$fc','$sub','$subb','$el')");
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
<title>Online Voting System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="example4.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 
<link rel="stylesheet" href="styler.css">
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
        <center>

<br>
<br>
    <center>
 <div class="container"> 
 <div class="title">Candidate Added to Election</div>
    <br>
<br>

	<table border="0" cellpadding="3" cellspacing="3">
    <tr style="font-weight:bold;">
    <td>Sr. No.</td>
    <td>Election Id</td>
    <td>Title</td>
    <td>description</td>
    </tr>
    <?php
	$sr=1;
	$h=mysqli_query($al,"select * from election where el_id='$el'");
	while($j=mysqli_fetch_array($h))
	{
		?>
        <tr>
        <td><?php echo $sr;$sr++;?></td>
        <td><?php echo $j['el_id'];?></td>
        <td><?php echo $j['title'];?></td>
        <td><?php echo $j['description'];?></td>
         </tr>
     <?php } ?>
     </table>
</div>
 <div class="container">
    <div class="title">Add Candidate</div><br><br>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
              <span class="details">Party Name</span>
            <input type="text" placeholder="Enter Party name" name="fc" required>
          </div>
          <div class="input-box">
            <span class="details">Candidate Name</span>
            <input type="text" placeholder="Enter Candidate Name" name="sub" required>
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
 <div class="title">Manage Candidate</div>
    <br>
<br>
    <table border="0" cellpadding="3" cellspacing="3">
    <tr style="font-weight:bold;">
    <td>Sr. No.</td>
    <td> Party Name</td>
    <td>Candidate Name</td>
    <td>Candidate Id</td>
    <td>Election</td>
    <td>Delete</td>
    </tr>
    <?php
	$sr=1;
	$h=mysqli_query($al,"select * from nominee");
	while($j=mysqli_fetch_array($h))
	{
		?>
        <tr>
        <td><?php echo $sr;$sr++;?></td>
        <td><?php echo $j['name'];?></td>
        <td><?php echo $j['s1'];?></td>
        <td><?php echo $j['id'];?></td>
        <td><?php echo $j['ele'];?></td>
        <td align="center"><a href="delete.php?del=<?php echo $j['id'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:18px;color:rgba(255,0,4,1.00);">[x]</a></td> 
        </tr>
     <?php } ?>
     </table>
     <br>
 <div class="input-box button">
<input type="submit" onClick="window.location='home.php'" value="BACK">
</div>

</div>
<br>
<br>
 </div>
</center>
</body>
</html>