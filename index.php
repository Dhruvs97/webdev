<?php
session_start();
$conn = mysqli_connect("localhost","root","","dhruvs");
	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM reg WHERE name='" . $_POST["user_name"] . "' and regno = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["user_id"] = $row['regno'];
	} else {
	$message = "Invalid Username or Password!";
	}
}
if(!empty($_POST["logout"])) {
	$_SESSION["user_id"] = "";
	session_destroy();
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href = "index.css">
</head>
<body>
<div>
<div style="display:block;margin:0px auto;">
<?php if(empty($_SESSION["user_id"])) { ?>
<form action="" method="post" id="frmLogin">
	<div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>	
	<div class="field-group">
		<div><label for="login">Username</label></div>
		<div><input name="user_name" type="text" class="input-field"></div>
	</div>
	<div class="field-group">
		<div><label for="password">Password</label></div>
		<div><input name="password" type="password" class="input-field"> </div>
	</div>
	<div class="field-group">
		<div><span><input type="submit" name="login" value="Login" class="form-submit-button"></span></div>
	</div>       
</form>
<?php 
} else { 
$result = mysqlI_query($conn,"SELECT * FROM reg WHERE regno='" . $_SESSION["user_id"] . "'");
$row  = mysqli_fetch_array($result);
?>
<form action="" method="post" id="frmLogout">
<div class="member-dashboard">Welcome <?php echo ucwords($row['name']); ?>, you have successfully logged in!<br>
Click to <input type="submit" name="logout" value="Logout" class="logout-button">.</div>
</form>
</div>
</div>
<?php } ?>
</body></html>