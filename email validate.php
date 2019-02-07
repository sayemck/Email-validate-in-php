<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email validate</title>
</head>

<body>
<?php 
	if (isset($_POST['submit'])){
		$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
		if ($email=== false){
		print "invalid email";
		}
		else{
			print "valid email";
		}
	}
?>

<form action="" method="post">
	Enter a Email Address:<input type="text" name="email"/>
    <input type="submit" name="submit" value="Check Email"/>
</form>
</body>
</html>