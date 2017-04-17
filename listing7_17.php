<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-17</title>
		<script type="text/javascript">
		function validateform(){
			if (document.regform.fullname.value==""){
				window.alert("Please provide your full name");
				document.regform.fullname.focus();
				return false;
			}
			if (document.regform.email.value==""){
				window.alert("Please provide your email address");
				document.regform.email.focus();
				return false;
			}
			if (document.regform.email.value.indexOf("@") < 0){
				window.alert("Please enter a valid email address");
				document.regform.email.focus();
				return false;
			}
			else {
				window.alert("Thank you for your registration");
				return true;
			}
		}



		</script>
	</head>
	<body onload = "document.regform.fullname.focus();">
		<h2>Validate Form</h2>
		<form name="regform" onsubmit="return validateform();">
			<fieldset>
				<legend>Registration form</legend>
				Name: <input type="text" name="fullname" size="24" />&nbsp&nbsp
				Email: <input type="text" name="email" /><br>
				Degrees: Bachelors <input type="checkbox" name="bachelors"/>&nbsp Masters
				<input type="checkbox" name="masters"/><p></p>
				Programs: Online <input type="radio" name="online"/>&nbsp
				Night <input type="radio" name="night"/>&nbsp
				Full Time <input type="radio" name="fulltime"/><p></p>
				Choose areas of interest:<br>
				<select name="Interests">
				<option selected value="">Interests</option>
				<option value="socialwork">Social_Work</option>
				<option value="clinical">Clinical</option>
				<option value="education">Education</option>
				</select> 
			</fieldset>
			<input type="submit" value="Submit Registration" />
			<input type="reset" value="Reset Form" />
		</form>

	</body>
</html>