<?php
   include('connection.php');
   if(isset($_POST['token']) && password_verify("signuptoken",$_POST['token']))
     {
     	$name = $_POST['name'];
     	$email = $_POST['email'];
     	$phone = $_POST['phone'];
     	$gender = $_POST['gender'];
     	$password1 = $_POST['password1'];
     	$cpassword = $_POST['cpassword'];

     	if($name != "" && $email != "" && $phone != "" && $gender != "" && $password1 != "" && $cpassword != "")
     	{
     		$query = $db->prepare("INSERT INTO users(name,email,phone,gender,password1) VALUES (?,?,?,?,?)");

     		$data = array($name,$email,$phone,$gender,password_hash($password1, PASSWORD_DEFAULT));

     		$execute = $query->execute($data);
     		if($execute)
     		{
     			echo "user created successfully";
     		}
     		else
     		{
     			echo "something went wrong";
     		}
     	}



     }
     else
     {
     	echo "server error";
     }

?>