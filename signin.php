<html>
<head>
<title>register</title>
</head>
<?php
$db=mysqli_connect("localhost","root","","mini2");
if(isset($_POST['submit']))
{

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['rpass'];

    if (empty($fname) or empty($email) or empty($password) or empty($confirm_password)) {
        die("All field's are compulsory.");
    }
    if ($password != $confirm_password) {
        die("Password did not matched.");
    }
    if (!stripos($email, '@')) {
        die("Invalid email address.");
    }
}
else {
    die('error');
}


	$query="insert into `user` (fname,lname,email,password) values('$fname','$lname','$email','$password')";
	$run=mysqli_query($db,$query);
	if($run){
	$_SESSION['user'] = $email;
     header('location:index.php');}
	else{
		echo "error:".mysqli_error($db);
}
?>

</body>
</html>
