<?php 
for ($i = 1; $i <= 100; $i++){
	if($i % 3 == 0 & $i % 5 ==0){
		echo "Fizz Buzz <br>\n";
	}
	elseif($i % 3 == 0){
		echo "Fizz <br>\n";
	}
	elseif($i % 5 == 0){
		echo "Buzz <br>\n";
	}
	else{
		echo $i;
		echo "<br>\n";
	}
} 
?>