<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body background="images/bg.jpg">

<br><br>
<center>

<form action="authenticate.php" method="post" >
  <div class="imgcontainer">
    <img src="images/av.png" alt="Avatar" class="avatar">
  </div>
<center>
  <div class="container">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="name" id="username" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" id="password" required><br>
        
    <button type="submit">Login</button>
    <label><br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</center>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"> <a href="#">Forgot password?</a></span>
  </div>
</form>
</center>
</body>
</html>

