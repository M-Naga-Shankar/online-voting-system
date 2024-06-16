
<?php
include("configASL.php");
session_start();
if(isset($_SESSION['aid']))
{
	header("location:index.php");
}
  $sql1=mysqli_query($al,"select * from admin");
         while($row=mysqli_fetch_assoc($sql1))  
    {  
    
   $act=$row['active']; ;
     }
if(!empty($_POST))
{
	$aid=($_POST['aid']);
	$pass=($_POST['pass']);
if($aid!=admin){
    
   
	$sql=mysqli_query($al,"select * from voter where UserId='$aid' and Password='$pass'");
      if($act==1){
	if(mysqli_num_rows($sql)==1)
	{
        
            while($row=mysqli_fetch_assoc($sql))  
    {  
    $st=$row['Status'];  
     }
        if($st==0){
            ?>
        <script type="text/javascript">
		alert("Already Voted");
		</script>
      <?php
		
	}
        else{
            $_SESSION['aid']=$_POST['aid'];
		header("location:voterview.php");
            	
        }
    }
	else
	{
		?>
        <script type="text/javascript">
		alert("Incorrect ID or Password");
		</script>
      <?php
	}

}
else{
   ?>
        <script type="text/javascript">
      alert("Election not started");
      </script>
      <?php

}
}
else
{
	$aid=($_POST['aid']);
	$pass=($_POST['pass']);
	$sql=mysqli_query($al,"select * from admin where aid='$aid' and password='$pass'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['aid']=$_POST['aid'];
		header("location:home.php");
	}
	else
	{
		?>
        <script type="text/javascript">
		alert("Incorrect Admin ID or Password");
		</script>
      <?php
	}
}
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="c.css">
<title>Online Voting System</title>
</head>
<body style="  background: linear-gradient(135deg, #71b7e6, #9b59b6);">

 <div class="wrapper">
         <div class="title-text">
            <div class="title login">

	</div>	
</div>
              <div class="title-text">         
            <div class="title signup">
	<form>
		 <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Digital Voting System" style="  background: linear-gradient(135deg, #71b7e6, #9b59b6);">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                  </div>
               </form>

            </div>

         </div>
</div>
<?php if($act==0){
   ?>
  <h3>  <marquee style="margin: 10px; color: ghostwhite;">Election Ended. View Results of Ended Election By Using Given link</marquee></blink></h3><?php
} else{ ?>
   <h3> <marquee>Election Started. Vote Now </marquee></h3><?php
   ?>
<?php } ?>
 <div class="wrapper" style="margin: 100px;">
        <div class="title-text">
            <div class="title login" >
               Login Form

            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div> 
         <div class="form-container">
            <div class="slide-controls" >
               <input type="radio" name="slide" id="login" checked >
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login" >Login</label>
               <label for="signup" class="slide signup" >Admin</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="" method="post" class="login">
                  <div class="field">
                     <input type="text" placeholder="Login ID" name="aid" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="pass" required>
                  </div>
                  <div class="pass-link" style="margin: 20px;">
                     <?php 

                     if ($act==0) {
                    ?>
                    <a href="polling.php">** VIEW RESULTS **</a>
                 <?php } ?>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login" style="  background: linear-gradient(135deg, #71b7e6, #9b59b6);">
                  </div>
               </form>
               <form action="" method="post" class="signup">
                  <div class="field">
                     <input type="text" placeholder="Admin ID" name="aid" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="pass" required>
                  </div>
                 
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup" style="  background: linear-gradient(135deg, #71b7e6, #9b59b6);">
                     
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
</body>
</html>
