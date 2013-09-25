<!-- See how the $lang variable takes on the value of each of the elements in $langs, one by one, then echos that element to the page? -->
<html>
<head>
	<title>Loops + Arrays = ForEach</title>
</head>
<body>
	<h1>Languages you can learn on Codecademy!</h1>
	<div class='wrapper'>
		<ul>
			<?php
				$languages = array("Javascript", "HTML/CSS", "PHP", "Python", "Ruby");
				foreach ($languages as $language) 
					{
					 	echo "<li>$language</li>";
					} 
				 unset($languages)
			?>
		</ul>
	</div>
</body>
</html>