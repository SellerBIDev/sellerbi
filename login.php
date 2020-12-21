<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap V0.1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
  
  body {
    background-image: url("p4.jpg");
    background-position: center;
  }
</style>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" align = "center">
      <div style = "margin-top: 50px">
  <h2>Login Page</h2><br>
  <form  method="POST" action="loginphp.php">
  
      <div class="input-group">
      <span class="input-group-addon">Email</span>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon">Password</span>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="">
    </div>
    <br>   
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Login</button>

      </form>
    </div>
  </div>
   <div class="col-sm-4"></div>
 </div>
</div>


   </body>
</html>