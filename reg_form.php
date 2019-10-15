<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<form>
	<label for="firstName">First Name</label>
	<input type="text" required="" name="firstName" id="firstName">
	<label for="lastName">Last Name</label>
	<input type="text" required="" name="lastName" id="lastName">
	<label for="male">Male</label>
	<input type="radio" name="gender" id="male">
	<label for="female">Female</label>
	<input type="radio" name="gender" id="female">
	<label for="other">Other</label>
	<input type="radio" name="gender" id="other">
	<label for="email">Email</label>
	<input type="email" name="email" id="email" required="">
	<label for="password">Password</label>
	<input type="password" name="password" id="password" min="5" max="10">
	<label for="birthday">Birthday:</label>
	<select name="month" id="month">
		<option>January</option>
		<option>February</option>
		<option>March</option>
	</select>
	<select name="year" id="year">
		<option>1989</option>
		<option>1990</option>
		<option>1991</option>
	</select>
	<select name="day" id="day">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>
	<label for="agreement">I agree to the terms and conditions.</label>
	<input type="checkbox" name="agreement" id="
	agreement">
	<input type="submit" name="Submit">

	


</form>
</body>
</html>