<?php
session_start();
if(isset($_SESSION['password']))
{
    header("location:student/studentdash.php");
}
?>
<html>
    <head>
        <title>
            Login Page
        </title>
<meta http-equiv="Cache-control" content="public">
	<meta name="author" content="Sanskar Srivastava">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="1 days">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    
    </head>
    <body>

    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        
    <a href="admin.php" class="container-login100-form-btn" >
					<button class="login100-form-btn" style="position:fixed;top:5vh;
    right:5vw;">
                        Admin
					</button>
                   </a>
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action="index.php" >
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="number" name="uname" placeholder="username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit" value="login" name="login">
                        Login
					</button>
				</div>

			</form>

			
		</div>
	</div>
    
    </body>

</html>
<?php
include("dbcon.php");
if(isset($_POST["login"]))
{
	$username=$_POST["uname"];
    $password=$_POST["pass"];
    $qry="SELECT * FROM student  WHERE rollno ='$username' AND password=MD5('$password') ";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row==0)
    {
         ?>
        <script>
            alert("Username or Password not match!!");
            window.open("index.php","_self");
        </script>    
        <?php

    }
    else  
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['rollno'];
        $_SESSION['password']=$id;
        header("location:student/studentdash.php");
    }
    //  include('function.php');
    //  showdetails($user,$pass);

}?>
<!-- Designed by ©Pushkal All right reserved 2021. -->