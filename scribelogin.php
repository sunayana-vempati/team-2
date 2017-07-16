<title>I&EYE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<body>
<div class="container-fluid bg-2 text-center">
  <h1 class="margin" padding-left="200px" >Login</h1>
 <div style="width:50%;margin-left:250px;border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;">
   <form action="" method="post">
	<label style="color:darkslategrey">Email:</label>
		<span style="color:red">*</span>
		<input type="text" id="email" name="email" placeholder="Enter mail id"  height="50%" width="50%" required><br><br>
		<label style="color:darkslategrey">Password:</label>
		<span style="color:red">*</span>
		 <input type="password" id="pwd" name="pwd" placeholder="Enter password" height="50%" width="50%" required><br><br>
		 <input type="submit" value="Submit" name="Submit">
    </form>
	</div>
	</div>
		 
		








<!--<!DOCTYPE html>


<style>
input[type=text], select {
    width: 100%;0.0
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<body>

<h2 style="margin-left:250px;color:green;">Login</h2>

<div style="width:50%;margin-left:250px" >
    <form action="" method="post">
	<span style="color:red">*</span>
        <input type="radio" name="user" value="scribe" checked> scribe<br>
        
      
	<label >Email:</label>
		<span style="color:red">*</span>
        <input type="text" id="email" name="email" placeholder="Enter mail id" style="width:100%">
		<br/>
		<br/>
		 <label >Password:</label>
		<span style="color:red">*</span>
        <input type="password" id="pwd" name="pwd" placeholder="Enter password">
		
		<input type="submit" value="Submit" name="Submit">
    </form>
	</div>-->
	
	
	<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"cfg2");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$email1=$password1="";

if (isset($_POST["Submit"])) {
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email1= test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
	if (empty($_POST["password"])) {
    $nameErr = "Password is required";
  } else {
    $password1 = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
    
  }
  
  
  

  
$query=mysqli_query($conn,"select email,password from scribe where email='.$email1.' and password='.$password1.'");
		$que=mysqli_num_rows($query);
          if(!$que)
			{	
			echo "welcome";
			header("Location:scribenew.php");
			}
							else
							{
								//$_SESSION['varname']=$user;
								
								echo "error";
								
							}
	}
	}

	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}	
?>
</html>
	
	
	