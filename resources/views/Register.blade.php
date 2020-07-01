<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>

	<h3>Sign Up Form</h3>
	<form action="/welcome" method="POST">
		<p class="Firstname">First Name: </p>
		<input type="text" name="Firstname">
		<p>Last Name: </p>
		<input type="text" name="Lastname">
		<p class="Lastname">Gender: </p>
		<input type="radio" name="Gender">Male<br>
		<input type="radio" name="Gender">Female<br>
		<input type="radio" name="Gender">Other<br>
		<p class="Nationality">Nationality: </p>
		<select>
			<option>Indonesia</option>
			<option>Amerika</option>
			<option>Jepang</option>
			<option>Swiss</option>
			<option>Korsel</option>
			<option>Other</option>
		</select>
		<p class="Language">Language Spoken:</p>
		<input type="checkbox" name="">bahasa indonesia <br>
		<input type="checkbox" name="">English <br>
		<input type="checkbox" name="">Other<br>
		<p class="Bio">Bio: </p>
		<textarea cols="30" rows="10"></textarea>
		<br>
		<button type="button" class="SignUp">Sign Up</button>
	</form>
</body>
</html>