<!DOCTYPE html>
<html>
<head>
<title>Who?</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php
session_start();

$userinfo = array(
                'user1'=>'password1',
                'user2'=>'password2'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }
	else {
        echo "<p>Invalid Login!</p>\n";
    }
}
?>
<div class="fixed">	
<form class ="form" method="post" action="main.html">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" style="text-align:left" name="user_login"> <span>Login</span></button>
  	</div>
</form>	
</div>
</body>
</html>