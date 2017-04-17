<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-15</title>
	</head>
	<body>
		<h2>Expanded Form</h2>
		<form name="regform">
			<fieldset>
				<legend>Registration Form</legend>
				Name: <input type="text" name="fullname" size="24" />&nbsp&nbsp
				Email: <input type="text" name="email" /><br>
				Degrees: Bachelors <input type="checkbox" name="bachelors"/>&nbsp
						Masters <input type="checkbox" name="masters"/><p></p>
				Programs: Online <input type="radio" name="online"/>&nbsp
						Night <input type="radio" name="night"/>&nbsp
						Full Time <input type="radio" name="fulltime"/><p></p>
				Choose areas of interest:<br>
				<select name="Interests">
				<option selected value="">Interests</option>
				<option value="socialwork">Social_Work</option>
				<option value="clinical">Clinical_Psych</option>
				<option value="education">Education</option>
				</select>
			</fieldset>
			<input type="submit" value="Submit Information">
			<input type="reset" value="Reset Form">
		</form>

	</body>
</html>