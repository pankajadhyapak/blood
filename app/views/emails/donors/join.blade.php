<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Thank you for Joining</h2>

		<div>
			<h5>Here are the Details of your login</h5>
			    <h6>User Name : {{ $email }}</h6>
                <h6>You Can Login here {{ URL::to('/login') }}</h6>
		</div>
	</body>
</html>