<!--User enters name, ID, and password.-->
<html>
	<head>
		<title>Listing 8-2 Registration Page</title>
	</head>
	<body>
		<div id="form">
			<!-- Go to enterName.php after clicking Register -->
			<form action="enterName.php" method="post" id="registerForm">
			<table width="150" border="1" cellspacing="3" cellpadding="5">
				<tr height="50">
					<th colspan="2" valign="middle">  <!--This is the table header -->
						<p id="head">Welcome to Matthews Technology!</p>
						<p id="body">Please enter your Name,<br>User ID, and Password</p>
					</th>
				</tr>
				<tr>
					<td width="40">
						<p class="label">Name:</p>
					</td>
					<td width="=100">
						<input type="text" name="name" value="" size="60" />
					</td>
				</tr>
				<tr>
					<td>
						<p class="label">User ID:</p>
					</td>
					<td>
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
				<input type="submit" name="submit" value="Register" />
			</form>
		</div>
	</body>
</html>