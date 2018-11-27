<?php
	$person=array("janki=>27","vikisha=>24","heta=>21","aayush=>19");
	
	//asort($person);
	
	ksort($person);
	$clength = count($person);
foreach($person as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

?>