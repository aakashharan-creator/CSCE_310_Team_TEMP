<!DOCTYPE html>
<html>
<head>
  <title>Create Account</title> 
</head>

<body>

  <h1>Register</h1>

  <form method="post" action="register_handler.php">

    <div>
      <label>UIN</label><br>
      <input type="text" name="UIN" required>
    </div>
    
    <div>
      <label>First Name:</label><br>
      <input type="text" name="First_name" required>
    </div>

    <div>
      <label>Middle Initial:</label><br>
      <input type="text" name="M_initial"> 
    </div>

    <div>
      <label>Last Name:</label><br>   
      <input type="text" name="Last_Name" required>
    </div>

    <div>
      <label>Username:</label><br>
      <input type="text" name="Username" required>
    </div>

    <div>
      <label>Password:</label><br>
      <input type="text" name="Password" required>
    </div>
    
    <div>
      <label>User type</label><br>
      <input type="text" name="User_Type" required>
    </div>

    <div>
      <label>Email:</label><br>
      <input type="text" name="Email" required>
    </div>

    <div>
      <label>Discord name</label><br>
      <input type="text" name="Discord_Name" required>
    </div>

    <input type="submit" value="Register">

  </form>

</body>
</html>
