<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h4>Sign Up Form</h4>
	<form action="welcome" method="post" id="form1">
	<p>First Name:</p>
	<input type="text" id="namadepan" name="firstname" rows="1" cols="30"></textarea>
	<p>Last Name:</p>
	<input type="text" id="namabelakang" name="lastname" rows="1" cols="30"></textarea>
	<p>Gender:</p>
	<input type="radio" id="male" name="gender" value="male">
	<label for="other">Male</label>
	<br>
	<input type="radio" id="female" name="gender" value="female">
	<label for="other">Female</label>
	<br>
	<input type="radio" id="other" name="gender" value="other">
	<label for="other">Other</label>
	<p>Nationality:</p>
	<select name="nationality" id="nationality">
		<option value="indonesia">Indonesia</option>
		<option value="malaysia">Malaysia</option>
		<option value="brunei">Brunei</option>
		<option value="singapore">Singapore</option>
	</select>
	<p>Language Spoken:</p>
	<input type="checkbox" id="bahasaindonesia" name="bahasaindonesia" value="Bahasa Indonesia">
	<label for="bahasaindonesia">Bahasa Indonesia</label><br>
	<input type="checkbox" id="bahasainggris" name="bahasainggris" value="Bahasa Inggris">
	<label for="bahasainggris">Bahasa Inggris</label><br>
	<input type="checkbox" id="bahasaother" name="bahasaother" value="Other">
	<label for="bahasaother">Other</label><br>
	<p>Bio:</p>
	
		<input type="text" id="bio" name="bio"><br><input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
	<button type="submit" form="form1" value="Submit">Sign Up</button>
</body>
</html>