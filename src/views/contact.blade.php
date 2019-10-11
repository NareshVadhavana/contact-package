<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>

	<h3>Contact us any time</h3>

	<form method="post" action="{{ route('contact') }}">
		@csrf

		<fieldset>
			<legend>Contact Us</legend>
			<input type="text" name="name" placeholder="Enter Your Name ... "> <br/><br/>
			<input type="email" name="email" placeholder="Enter Your Email Address ... "> <br/><br/>
			<textarea name="message" cols="30" rows="5" placeholder="Enter Your Query ... "></textarea> <br/><br/>

			<input type="submit" name="submit" value="Submit">
		</fieldset>
		
	</form>

</body>
</html>