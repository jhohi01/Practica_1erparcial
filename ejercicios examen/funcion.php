<?php
function fibo($n){
	$x=1;
	$y=0;
	if($n==0){
		echo "0";
	}
	else{
		echo"0";
		for($i=0;$i<$n;$i++){
			$z=$x+$y;
			echo ",".$z;
			$x=$y;
			$y=$z;
		}
		
	}

}
function sumatoria($n){
	$x=0;
	for($i=1;$i<=$n;$i++){
		$y=$x+$i;
		$x=$y;
	}
	
echo $y;
}
?>


