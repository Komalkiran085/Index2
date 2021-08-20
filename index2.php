<!DOCTYPE html>
<html>
<head>
	<title> Index </title>
	<link rel="stylesheet" type="text/css" href="css/index2.css">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	</head>
<body>
	<section>
		<div class="col-sm-12">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
					<div class="heading">
						<p>APPOINTMENT BOOKING SYSTEM</p>
					</div>
					<div class="form_fields col-sm-12">
						<div class="col-sm-6 paddoff">
								<button type="submit" class="btn" id="btn">SIGN UP</button>
							</div>
								<div class="col-sm-6 paddoff">
								<button type="submit" class="btn" id="bton">LOG IN</button>
							</div>
							</div>

					<div class="form" id="login">
						<form>
							<div class="contain">
							<div class="user_fields">
								<label for="username">Username:</label>
								<input type="username" name="username" class="form-control" placeholder="Enter your username">
							</div>
							<div class="user_fields">
								<label for="password">Password:</label>
								<input type="password" name="password" class="form-control" placeholder="Enter your password">
							</div>
							<div class="submit_btn">
								<input type="submit" name="Submit" id="submit" onclick="sendlogin();">
							</div>
						</div>
						</form>
						
					</div>

					<div class="form hidden" id="signup">
						<form>
							<div class="contain">
							<div class="user_fields">
								<label for="name">Name:</label>
								<input type="name" name="name" id="name" class="form-control" placeholder="">
							</div>
							<div class="user_fields">
								<label for="email">Email:</label>
								<input type="email" name="email" id="email" class="form-control" placeholder="">
							</div>
							<div class="user_fields">
								<label for="phone">Phone Number:</label>
								<input type="phone" name="phone" id="phone" class="form-control" placeholder="">
							</div>
							<div class="user_fields">
								<label for="gender">Gender:</label>
								<input type="gender" name="gender" id="gender" class="form-control" placeholder="">
							</div>
							<div class="user_fields">
								<label for="password">Password:</label>
								<input type="password" name="password" id="password1" class="form-control" placeholder="">
							</div>
							<div class="user_fields">
								<label for="confirm-password">Confirm Password:</label>
								<input type="confirm-password" name="confirm-password" id="cpassword" class="form-control" placeholder="">
							</div>
							<div class="submit_btn">
								<input type="submit" name="Submit" onclick="sendsignup();">
							</div>
							
						</form>
						
					</div>
			</div>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</section>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
	<script type="text/javascript">
    	var btn = document.getElementById('btn');
    	     var bton = document.getElementById('bton');
            var  login = document.getElementById('login');
             var signup = document.getElementById('signup');

        btn.addEventListener("click", function(){
        	// form2.classList.remove('show');
        	signup.classList.remove('hidden');

        	login.classList.add('hidden');
        	signup.classList.add('show');
        });

        bton.addEventListener('click', function(){
        	
        	login.classList.remove('hidden');
        	// form1.classList.remove('show');

        	login.classList.add('show');
        	signup.classList.add('hidden');
        });

        function sendlogin()
		{
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;
			
			var token = "<?php echo password_hash("logintoken", PASSWORD_DEFAULT);?>"
			if(username != "" && password != "")
			{

			}
			else
			{
				alert('please fill all the details.');
			}
		}

		function sendsignup()
		{
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var phone = document.getElementById('phone').value;
			var gender = document.getElementById('gender').value;
			var password1 = document.getElementById('password1').value;
			var cpassword = document.getElementById('cpassword').value;
			var token = "<?php echo password_hash("signuptoken", PASSWORD_DEFAULT);?>"
			if(name != "" && email != "" && phone != "" && gender != "" && password1 != "" && cpassword != "")
			{
				if(password1 == cpassword)
				{
					$.ajax(
				{
					type:'POST',
					url:"ajax/sign_up2.php",
					data:{name:name,email:email,phone:phone,gender:gender,password1:password1,cpassword:cpassword,token:token},
					success:function(data)
					{
						alert(data);
					}
				});
				}

			}
			else
			{
				alert('Password and confirm password are not same');
			}

		}

    </script>
<script type="text/javascript">
    $('form').submit(function(e) {
    e.preventDefault();
});</script>
</body>
</html>
