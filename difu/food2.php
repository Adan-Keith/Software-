<?php 
$quantity= $_POST["Quantity"];
echo $quantity;
$food=$_POST["food"];
if ($food=="pi") 
	{
	echo "You have ordered "."".$quantity.""."Pizzas"."<br>";
	for ($i=0; $i <$quantity ; $i++) { 
		echo '<img src="pizzaa.jpg">';
	}
}
else if ($food=="b") 
{
	echo "You have ordered "."".$quantity.""."Burgers"."<br>";
	for ($i=0; $i <$quantity ; $i++) 
	{ 
		echo '<img src="burgers.jpg">';
	}
}
	else if ($food=="p") 
{
	echo "You have ordered "."".$quantity.""."Pies"."<br>";
	for ($i=0; $i <$quantity ; $i++) { 
		echo '<img src="pie.jpg">';
}
}
 ?>