<?php

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$starttime = $mtime;


/*
function get_fibonacci ($arg) # gia $arg 30 kai pano o xronos ektelesis feugei pano apo to 1 sec
{
	$f1=1;
	$f2=1;
	
	if ($arg <= 0)			{$fn = "Impossibru!";}
	elseif ($arg == 1)  	{$fn = $f1;}
	elseif ($arg == 2) 		{$fn = $f2;}
	else 					{$fn = get_fibonacci(($arg - 1)) + get_fibonacci(($arg - 2));}
	return $fn;
}
*/	

function get_fibonacci2 ($arg)	/*me auti tin ulopoiisi i eksodos apeirizetai prin ftasei o xronos ektelesis to 1 sec :D*/
{
	$fib_array = array (1=>1, 2=>1);
	
	
	if ($arg <= 0)
	{
		return "Impossibru!";
	}
	
	if ($arg > 2)
	{
		for($i = 3; $i<=$arg; $i++)
		{
			$fib_array[]= $fib_array[$i-1] + $fib_array[$i-2];
		}
	}
	#print_r($fib_array);
	return $fib_array[$arg];
}
/*
function get_prime ($arg) #gia $arg 1000 kai pano o xronos ektelesis feugei pano apo to 1 sec
{
	if ($arg==1) {return 2;}
	if($arg==2)	{return 3;}
	
	$num=3;
	$num_of_primes_found = 0;

	while ($num_of_primes_found < $arg):
		#if ((($num % 6 == 1) || ($num % 6 == -1)) && !($num % 2) && !($num % 3)){
		$divisor=1;
		$num_of_divisors=0;

		while (($num >= $divisor) && ($num_of_divisors < 3)):
			if (!($num % $divisor)) 
			{$num_of_divisors = $num_of_divisors +1;}
			
			$divisor = $divisor +1;
		endwhile;
		if($num_of_divisors == 2) 
		{$num_of_primes_found = $num_of_primes_found +1;}
		
		$num = $num +1;
		#}
	endwhile;
	
	return ($num-1);
}*/

 /*  
   function get_prime ($arg)
   {
	$fib_ar = array(1,2,3,5,7,11,13,17,19,23,29);
   	$lines = file('http://www.achernar.btinternet.co.uk/primes.html');
	foreach ($lines as $line_num => $line)  
	{
		if ($line_num>24 && $line_num < 15)
		{
			$fib_ar[] = explode ("  ", $line);
			#echo "{$line_num}" . htmlspecialchars($line) . "<br />\n";
		}
	}
	
	print_r($fib_ar);
	
	}
*/

/*
function get_prime ($arg)
{
	
	$prime_array = array(1=>2);
	
	$num=3;
	$num_of_primes_found = 0;

	while ($num_of_primes_found < $arg):
		
		for ($i=$prime_array[1] ; $i <= $num_of_primes_found +1 ; $i++) {
			$divisor=$prime_array[$i];
			$num_of_divisors=0;

				if (!($num % $divisor)&& ($num_of_divisors < 3)) 
				{$num_of_divisors = $num_of_divisors +1;}
				


			if(!$num_of_divisors) 
			{
			$prime_array[] = $num;
			$num_of_primes_found = $num_of_primes_found +1;
			}
			

		}
					$num = $num +1;
	endwhile;
	#print_r ($prime_array);
	return	$prime_array[$arg];
}
*/




	function get_prime ($arg)
	{
	$num = 4;
	$primes=2;
	$prime_array = array (1=>2,2=>3);


	while ($primes < $arg):
	

	
		if ((($num % 6) == 1) or ($num == (1+(int)($num/6))*6-1) )
		{		
			$num_of_div=0;		
			for ($i=2; $i <= sqrt($num); $i++)
			{

				if ( ($num % $i) == 0) { $num_of_div++;}
					
					
			}
			if ($num_of_div==0){$prime_array[] = $num; $primes++; }
		}

		
		$num++;
		endwhile;
		#print_r($prime_array);	
		#echo sizeof($prime_array)."\n";
		return $prime_array[$arg];
	}



	$a = $_GET['a'];
	$oper = $_GET['oper'];
	$b = $_GET['b'];



	

	switch ($oper)
	{
	case "add": echo $a + $b;	break;
	case "sub": echo $a - $b;	break;
	case "mul": echo $a * $b;	break;

	case "div": 
					if ($b <> 0) 
					{
						echo $a/$b;		
					}		
					else 
					{
					echo 'No you didnt.';
					}
					break;
					
	case "pow": 	echo pow($a,$b);	break;
	case "sqrt": 	echo sqrt($a);		break;			
	case "conc": 	echo $a.$b;			break;			
	case "mulconc": 
					$mulconcat = $a;
					for ($i = 1; $i <= $b; $i++) 
					{
						$mulconcat =$mulconcat.$a;
					}
					echo $mulconcat;
					break;	
					
	case "find": 	echo strripos($a,$b);			
					break;
					
	case "length": 	echo strlen("$a");		
					break;
					
	case "upper": 	echo strtoupper("$a");
					break;	
						
	case "size":						
					echo count($a); break;
	case "sum":		
					
					$sum = 0;
					for ($i = 0; $i < count($a); $i++) 
					{
						$sum = $sum + $a[$i];
					}
					echo $sum;
					break;
					
					
	case "fib":	
					$fib = get_fibonacci2($a);
					echo $fib;
					break;
					
	case "prime":	$prime = get_prime($a);
					echo $prime;
					break;

	}




	




$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$endtime = $mtime; 
$totaltime = ($endtime - $starttime);

?>

