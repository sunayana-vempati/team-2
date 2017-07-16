<!DOCTYPE html>
<html>
<head>
<title>Update your profile</title>

  
  <h2 style="font-size:75px;color:darkblue;"><i> I&EYE </i></h2>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px TimesNewRoman, TimesNewRoman;
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
    margin: 8px 0
	;
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

input[type=text], select {
    width: 50%;
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
    width: 20%;
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
</head>
<body >
<div class="container-fluid bg-2 text-center">
  <h2 class="margin" padding-left="200px" >Update Profile</h2>
 <div style="width:50%;margin-left:250px;border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;">
   <form align="center" method="post">
   <label style="color:darkslategrey;align:left;">Languages Preferred:</label>
		<span style="color:red">*</span>
   &nbsp;&nbsp;&nbsp; <input type="checkbox" name="check" value="english" checked><b style="color:black" > English</b>
				&nbsp;&nbsp;	<input type="checkbox" name="check" value="telugu" style="color:black"><b style="color:black"> Telugu</b></br></br>
					

		<label style="color:darkslategrey;align:left;">Select exam:</label>
		<span style="color:red">*</span>			
						<input list="qual" name="qual">
<datalist id="qual">
  <option value="SSC">
  <option value="Intermediate 1st year">
  <option value="Intermediate 2nd year">
  <option value="Graduation">
</datalist> </br></br>
<label style="color:darkslategrey;align:left;">Qualifications:</label>
		<span style="color:red">*</span> <input list="qual1" name="qual1">
<datalist id="qual1">
  <option value="SSC">
  <option value="Intermediate 1st year">
  <option value="Intermediate 2nd year">
  <option value="Graduation">
</datalist> </br></br>
<label style="color:darkslategrey;align:left;">Email:</label>
		<span style="color:red">*</span>
 &nbsp;&nbsp;&nbsp;<input type="text" name="emailid"><br/>
<label style="color:darkslategrey;align:left;">Exam Center:</label>
		<span style="color:red">*</span>
<input type="text" name="exam" ><br/>
<input type="submit" value="Update" name="Update">





</form>
	<!--<label style="color:darkslategrey;align:left;">Email:</label>
		<span style="color:red">*</span>
		<input type="text" id="email" name="email" placeholder="Enter mail id" required><br>
		<label style="color:darkslategrey;align:left;">Password:</label>
		<span style="color:red">*</span>
		<input type="password" id="pwd" name="pwd" placeholder="Enter password">
		
		<input type="submit" value="Submit" name="Submit">
    </form>-->
	</div>
	</div>




<!--<h2 align="center">Update your profile</h2>
<form align="center" method="post">
</br>
Languages preferred: <input type="checkbox" name="check" value="english"> English
					<input type="checkbox" name="check" value="telugu"> Telugu</br></br>
					
Select the Exam: 	<input list="qual" name="qual">
<datalist id="qual">
  <option value="SSC">
  <option value="Intermediate 1st year">
  <option value="Intermediate 2nd year">
  <option value="Graduation">
</datalist> </br></br>

Qualifications: <input list="qual1" name="qual1">
<datalist id="qual1">
  <option value="SSC">
  <option value="Intermediate 1st year">
  <option value="Intermediate 2nd year">
  <option value="Graduation">
</datalist> </br></br>
Email id: <input type="text" name="emailid"><br/>

Exam Center: <input type="text" name="exam" ><br/>
<input type="submit" align="center" name="Update" value="Update" ></br>




</form>-->
<?php
session_start();


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

$lang =$quali=$exams=$email="";
if (isset($_POST["Update"])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  
    $lang = $_POST["check"];
	$quali =$_POST["qual"];
	$exams = $_POST["exam"];
	$email=$_POST["emailid"];
    // check if name only contains letters and whitespace
    
  }
$status="one";
	$sql = "INSERT INTO student_update (lang, qual,exam,email,status) VALUES ('$lang', '$quali','$exams','$email','$status')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " ;
}




static $x=0;
static $y=0;
static $z=0;
$ph=0;
$status=0;
function value($ans)
{
$cars = array("SSC", "Intermediate 1st year", "Intermediate 2nd year","Graduation");
	$length=sizeof($cars);
	for($z=0;$z<$length;$z++)
	{
		if ($ans==$cars[$z])
		
		return $z;
	}
}

	
	
	
	$_SESSION["msg"] = "u have received request from this ";
	$quali1 =$_POST["qual"];
	
	$cars = array("SSC", "Intermediate 1st year", "Intermediate 2nd year","Graduation");
	$length=sizeof($cars);
	for($x=0;$x<$length;$x++)
	{
		if ($quali1==$cars[$x])
		$y=$x;
	}


$sql = "SELECT email, qual FROM scribeup2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $ans= $row["qual"];
		 $mail=$row["email"];
		$st= value($ans);
		if($y>$st)
		{
			$sq="select phoneno from scribe where email= '$mail' ";
			$result = mysqli_query($conn, $sq);
			if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result)) {
        $ph= $row1["phoneno"];
		require_once "C:\\vendor\autoload.php";
    //use Twilio\Rest\Client;
    
    // Step 2: set our AccountSid and AuthToken from https://twilio.com/console
    $AccountSid = "AC4d6acd367bc084b1d17915a984072840";
    $AuthToken = "c3efe901000a8153d5fbfae2e51ca7ef";

    // Step 3: instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);

    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
    $people = array(
        ph,
         );

    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    foreach ($people as $number => $name) {

        $sms = $client->account->messages->create(

            // the number we are sending to - Any phone number
            $number,

            array(
                // Step 6: Change the 'From' number below to be a valid Twilio number 
                // that you've purchased
                'from' => "+15108519466", 
                
                // the sms body
                'body' => "Hey $name,+15108519466 has requested you to be the scribe for the forthcoming exam."
            )
        );

        // Display a confirmation message on the screen
        echo "Sent message to $name";
    }
		}			
		 
    }

}
}
}
}

?>


</body>
</html>

