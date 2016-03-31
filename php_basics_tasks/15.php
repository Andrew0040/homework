<?php 

$a = 10;
$b = 2;
$operator = '*';


switch ($operator) 
{
	case '+':
		print_r($a + $b);	
		break;
	case '-':
		print_r($a - $b);	
		break;
	case '/':
		if ($b == 0) 
			{
				print_r("Деление на 0");
				break;
			}
		print_r($a / $b);	
		break;
	case '%':
		print_r($a % $b);	
		break;
	case '*':
		print_r($a * $b);	
		break;
	
}
 ?>
