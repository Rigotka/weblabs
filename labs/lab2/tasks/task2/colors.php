<!DOCTYPE html>
<html>
<head>
	<title>Цвета HTML</title>
	<link href="/styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Цвета HTML <a href="/labs/lab2/lab2.php">вернуться</a></h1>
		<div class = description>
			Задание выполнено с помощью трех циклов вложенных друг в друга.
		</div>
		<div class="items">
			<?php
				function formated($value)
				{
					$result = dechex($value);
					if(strlen($result) < 2)
						$result =  '0'.$result;
					return $result;
				}

				$step = 255;
				for ($red = 0; $red <= 255; $red += $step)
				{
					$redHEX = formated($red);
					for($green = 0; $green <= 255; $green += $step)
					{
						$greenHEX = formated($green);
						for($blue = 0; $blue <= 255; $blue += $step)
						{
							$blueHEX = formated($blue);
							$color = '#'.$redHEX.$greenHEX.$blueHEX;
							echo "<div class='item'>
						  	        <div class='item-value' style='color: $color'>$color</div>
					      		  </div>";
						}
					}
				}
			?>
		</div>
	</body>
</html>