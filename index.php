<?php
$array = array(1,2,5,7,8,-2,-3,900,11,13);

	$rand100 = array();
	for($i=0;$i<101;$i++){
		array_push($rand100,rand(0,10000));
	}

function sort_array($array){
	$length = count($array)-1;
	$temp = 0;
	do{
		$swapped = false;
		for($i=0;$i<$length;$i++){
			if($array[$i]>$array[$i+1]){
				$temp = $array[$i+1];
				$array[$i+1]=$array[$i];
				$array[$i]=$temp;
				$swapped = true;
			}
		}
		$swapped = false;
		for($i=$length;$i>0;$i--){
			if($array[$i]<$array[$i-1]){
				$temp = $array[$i-1];
				$array[$i-1]=$array[$i];
				$array[$i]=$temp;
				$swapped=true;
			}
		}

	} while ($swapped);
	return($array);
}
	
$test = sort_array($rand100);
var_dump($test);


?>

