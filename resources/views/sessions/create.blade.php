<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	here is registeration

<?php
use App\User;

?>
	<form method="POST" action="/profile/public/register">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name">Name:</label>
			
			<input type="text" class="form-control" name="name" id="name" required>
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			
			<input type="text" class="form-control" name="email" id="email" required>
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			
			<input type="password" class="form-control" name="password" id="password" required>
		</div>

		<div class="form-group">
			<label for="password_confirmation">Password Confirmation:</label>
			
			<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
		</div>


		<div class="form-group">
			<button type="submit">Submit</button>
			
		</div>
	</form>
</body>
</html>