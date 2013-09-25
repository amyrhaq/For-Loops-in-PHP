<!-- Check out the for loop in the editor. See how it echos the value for $leap, adds four to it, then repeats? -->
<html>
<head>
	<title>What's a loop?</title>
</head>
<body>
<?php 
for ($leap = 2004; $leap < 2050; $leap = $leap + 4)
{
	echo "<p>$leap</p>";
} 
?>
</body>
</html>