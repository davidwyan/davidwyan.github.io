<?php

function myFirstFunction($firstVar, $secondVar = "what", $thirdVar = null){
	echo $firstVar;
	echo $secondVar;
	if($thirdVar){
		echo $thirdVar;
	}
}

?>