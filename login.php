<?php
$error = "";
$successMessage = "";  
    
if($_POST)
{
    
    if(!$_POST["email"])
    {
        $error .= "an email address is required.<br>";
    }
   if( isset( $_REQUEST['password'] ) ) {
  $user = $_REQUEST['password'];
}
    if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false) 
    {
        $error .= "an email is not valid.<br>";
    }
    
    if($error != "")
    {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>there were errors in your form: </strong></p>' . $error .'</div>';   
        
        
    }
    
    
    
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content "ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>I and EYE</h1>
        <div id="error"><? echo $error.$successMessage; ?></div>
        <form method="post">
  <fieldset class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter your email address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="password">password</label>
    <input type="password" class="form-control" id="password" name="password">
  </fieldset>
  
  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
    <script type="text/javascript">
       $("form").submit(function (e){
            e.preventDefault(); 
            var error="";
           
           if($("#email").val()=="" ){
                    error += "the email field is required<br>";
                }
           
           if($("#password").val()=="" ){
                    error += "the subject field is required<br>";
                }
           
           if(error!="")
               {
                    $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>there were errors in your form: </strong></p>' + error +'</div>');                   
               }else{
                   
                    $("form").unbind("submit").submit();
               }
                           
    
                        
    }}
      
      </script>
    </body>
</html>
