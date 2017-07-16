<html>
<?php
if (isset($_POST["Submit"])) {
	
header("Location:bootstrap.html");
}
session_destroy();
?>
<form action="post">
<input type="submit" name="Submit" >
</form>
