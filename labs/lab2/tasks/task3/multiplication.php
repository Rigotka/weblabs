<!DOCTYPE html>
<html>
<head>
	<title>Таблица умножения</title>
	<link href="/styles/style.css" rel="stylesheet" type="text/css">
	<link href="/styles/multiplication.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Таблица умножения <a href="/labs/lab2/lab2.php">вернуться</a></h1>
		<div class = description>
			Задании выполнено с помощью двух циклов for.
		</div>

		<div class="items">
			<?php
				for($i = 2; $i < 10; $i++)
				{
					echo "<div class='item'>";
					for($j = 1; $j < 10; $j++)
					{
						$result = $i.' * '.$j.' = '.($i * $j);
						echo "<div class='item-value'>$result</div>";
					}
					echo "</div>";
				}
			?>
		</div>
	</body>
</html>