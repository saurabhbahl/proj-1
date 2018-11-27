<?php
	$person=array("janki=>27","vikisha=>24","heta=>21","aayush=>19");
	
	krsort($person);
	
	//arsort($person);
	
	$clength = count($person);
foreach($person as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

?>