<!DOCTYPE html>
<html>

<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body>
  <a href="getdata.php">GO TO PAGE</a>
  <div class="container">
    <div class="row col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h1>Registration Form</h1>
        </div>
        <div class="panel-body">
          <form action="registrationformhandler.php" method="post">
            <div class="form-group">
              <label for="acc_user_name">Username</label>
              <input type="text" class="form-control" id="acc_user_name" name="acc_user_name" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" id="password" name="password" />
            </div> 
            <input type="submit" class="btn btn-primary" />
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>