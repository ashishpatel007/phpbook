<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-2</title>
	</head>
	<body>
		<h1>While and Do-While Examples</h1>
		<?php
			echo "<b>Partial Character Set with While</b><br>";
			$i = 33;
			while ($i <= 41){
				echo "Character # ", $i, " is ", chr($i);
				echo "&nbsp; &nbsp; &nbsp; Character # ", $i + 1, " is ", chr($i + 1);
				echo "&nbsp; &nbsp; &nbsp; Character # ", $i + 2, " is ", chr($i + 2), "<br>";
				$i = $i + 3;
			
			}
			echo "<br><br><b>Partial Character Set with Do-While</b><br>";
			$i = 33;
			do {
				echo "Character # ", $i, " is ", chr($i);
				echo "&nbsp; &nbsp; &nbsp; Character # ", $i + 1, " is ", chr($i + 1);
				echo "&nbsp; &nbsp; &nbsp; Character # ", $i + 2, " is ", chr($i + 2), "<br>";
				$i = $i + 3;
			}
			while ($i <= 41);


		?>

	</body>
</html>