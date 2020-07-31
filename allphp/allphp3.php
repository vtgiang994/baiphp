<!DOCTYPE html>
<html>
<head>
	<title>html5 form</title>
</head>
<body>
	<!-- <input type="type" attributes> -->
	<!-- <input type="text" name="age" size=3>
	<label>
		Last Name
		<input type="text" name="lastname">
	</label> -->
	<fieldset>
		<legend>Enter your name</legend>
		<label>
			Last Name
			<input type="text" name="lastname">
		</label>
		<label>
			First Name
			<input type="text" name="firstname">
		</label>
		<br>
		<label>
			Password
			<input type="password" name="ssn">
		</label>
	</fieldset>
	<fieldset>
		<legend>Please select which sports you like</legend>
		<label>
			Baseball
			<input type="checkbox" name="baseball"><br>
		</label>
		<label>
			Basketball
			<input type="checkbox" name="basketball"><br>
		</label>
		<label>
			Football
			<input type="checkbox" name="football"><br>
		</label>
		<label>
			Hockey
			<input type="checkbox" name="hockey"><br>
		</label>
		<label>
			hadhas
			<input type="checkbox" name="football" checked>
		</label>
	</fieldset>
	<fieldset>
		<legend>Please select your favorite sport</legend>
		<label>
			Baseball
			<input type="radio" name="sport"><br>
		</label>
		<label>
			Basketball
			<input type="radio" name="sport"><br>
		</label>
		<label>
			Football
			<input type="radio" name="sport" ><br>
		</label>
		<label>
			Hockey
			<input type="radio" name="sport"><br>
		</label>
		<label>
			<input type="hidden" name="productid" value="121">
		</label>
	</fieldset>
	<form method="POST" action="index.php" enctype="multipart/form-data">
		<input type="button" name="launch" value="Click Me" onclick="myprogram()">
		<input type="reset" name="reset" value="Reset fields">
		<input type="submit">
		<textarea name="story" cols=20 rows=30></textarea>
		<select name="sports" size="4">
<option value="baseball">Baseball</option>
<option value="basketball">Basketball</option>
<option value="football">Football</option>
<option value="hockey">Hockey</option>
</select>
<input list="sports">
<datalist id="sports">
 <option value="Baseball">
 <option value="Basketball">
 <option value="Football">
 <option value="Hockey">
</datalist>
</body>
</html>