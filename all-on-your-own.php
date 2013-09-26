<!-- We've given you the $yardlines array in the editor. Go ahead and write a foreach loop that iterates over the array and echos each element to the page. -->
<html>
<head>
	<title>All On Your Own!</title>
</head>
<body>
<?php
$yardlines = array('The 50...', 'the 40...', 'the 30...', 'the 20...', 'the 10...', 'touchdown!'); 
foreach ($yardlines as $numbers) 
{
	echo $numbers;
}
?>
</body>
</html>