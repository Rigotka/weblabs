<!DOCTYPE html>
<html>
<head>
	<title>Инфорамция о разработчике</title>
	<link href="/styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Инфорамция о разработчике <a href="/labs/lab2/lab2.php">вернуться</a></h1>
		<div class = description>
			Задании выполнено с помощью массива и цикла foreach.
		</div>

		<div class="items">
			<?php
				$array = [
					"ФИО" => 'Сорокин Сергей Александрович', 
					"Группа" => "571-2",
					"Возраст" => "21",
					"Город" => "Томск",
				];
				foreach ($array as $key => $value) 
				{
					echo "<div class='item'>
						  	<div class='item-name'>$key</div> 
						  	<div class='item-value'>$value</div>
					      </div>";
				}
			?>
		</div>
	</body>
</html>