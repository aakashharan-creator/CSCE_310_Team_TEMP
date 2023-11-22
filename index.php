<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
</head>
<body>
  <h1>Tamu Cybersecurity Center</h1>
  <h2>Login</h2>
  
  <form method="post" action="user_auth/login_auth.php">
    <input type="text" name="Username" placeholder="Username"><br><br>
    <input type="password" name="Password" placeholder="Password"><br><br>
    <input type="submit" value="Login">
  </form>

  <h3>Don't have an account?</h3>
  <a href="create_account/register.php">
    <button>Register</button> 
  </a>

</body>
</html>
