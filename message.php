<!DOCTYPE html>
<html>
	<?php
		$message= $_GET["content"];
	?>
	<head>
	</head>
	<body>
		<p>
			This message prints out submitted php info.
			<?php echo $message ?>
		</p>
	</body>
</html>