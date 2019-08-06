<?php
ini_set('display_errors','1');
$host="localhost";
$user="phpmyadmin_username";
$password="phpmyadmin_password";
$db="phpmyadmin_database";

$cont=mysqli_connect($host,$user,$password);
mysqli_select_db($cont,$db);

/*
mysqli_connect($host,$user,$password);
mysqli_select_db($db);
*/

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($cont,$sql);
    
    if(mysqli_num_rows($result)==1){
      //  echo " You Have Successfully Logged in";
	//echo shell_exec('sudo tcpdump -i any  -c100 -n -v');
	//	echo $ot;
        //echo $fil;
	
system("/var/www/html/third.sh");
	header("Location: redirect.php");
	exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html>	
	<title>NMT Login Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div class="loginbox">
		<img src="loginbot.png" class="avatar">
			<h1>Login Here</h1>
			<form id = "login" method="POST" action="#">
				<p>User Name</p>
				<input id = "inputUsername" value='' type="text" name="username" placeholder="Enter Username">
				<p>Password</p>
				<input id = "inputPassword" value="" type="password" name="password" placeholder="Enter Password"><br>
				<input type = "submit"  value="Login "onclick="loginOnClick()" ><br><br>
				</form>
		<div>
	</body>			
</html>
