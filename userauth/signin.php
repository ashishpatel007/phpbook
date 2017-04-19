<!-- User enters id and password -->
<html>
	<head>
		<title>Listing 8-4 Sign-In</title>
	</head>
	<body>
		<div id="form">
			<!-- Display the sign-in form. After filling in, go to verify the script. -->
			<form action="verify.php" method="post" id="signinForm">
			<table width="100" border="1" cellspacing="3" cellpadding="5" >
				<tr height="50">
					<th colspan="2" valign="middle">
						<p id="head">Welcome Back!</p>
						<p id="body">Please enter your<br>User ID and Password</p>
						<p id="body">Not Registered? <a href="register.php">Click here!</a></p>
					</th>
				</tr>
				<tr>
					<td width="50">
						<p class="label">User ID:</p>
					</td>
					<td width="120">
						<input type="text" name="userid" value="" size="60" />
					</td>
				</tr>
				<tr>
					<td>
						<p class="label">Password:</p>
					</td>
					<td>
						<input type="password" name="passwd" value="" size="20" />
					</td>
				</tr>
			</table>
				<input type="submit" name="submit" value="Sign In" />
			</form>
		</div>
	</body>
</html>