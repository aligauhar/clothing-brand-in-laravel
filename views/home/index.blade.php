<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <title>Login form</title>
</head>
<body>


<?php
$conn = mysqli_connect("localhost","root","","laravelprj" ) or die ("error" . mysqli_error($conn));
if (isset($_POST['submit'])) {
	// fetch the user name and password
    echo"got password";
	$username  = $_POST['username'];
	$password = $_POST['userpassword'];
	// application of security pratice to avoide the sql injection
	mysqli_real_escape_string($conn, $email);
	mysqli_real_escape_string($conn, $password);
// finding if any username exist with the asked one
$query = "SELECT * FROM user WHERE username = '$username'";
// passing the query
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
//  if query passed successfully then fething all the related data
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result)) {
		$pass = $row['password'];
		// finding the user position
		$role= $row['role'];
		// after that verifying the passwords
		if (password_verify($password, $pass )) {
			// generating the session with the user crediantials
			if($role == "admin"){
			header('location: admin.blade.php');
            }
            else{
                header('location: member.blade.php'); 
            }
		}
		else {
			// if pasword is not been found in the database then it will generate the error on the main page
			echo "<script>alert('invalid username/password');
			window.location.href= 'index.blade.php';</script>";

		}
	}
}
// if user name is not been found in the database then it will generate the error on the main page
else {
			echo "<script>alert('invalid username/password');
			window.location.href= 'index.php';</script>";

		}
}
?>
<form method="POST" style="width:50%;margin-left:25%;margin-top:10% " >
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name = "username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "userpassword" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
  <button type="submit2" class="btn btn-primary">Login as Guest</button>
</form>
</body>
</html>