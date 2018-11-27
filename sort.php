<?php
	$person=array("janki","vikisha","heta","aayush");
	sort($person);
	
	$clength = count($person);
for($x = 0; $x < $clength; $x++) {
    echo $person[$x];
    echo "<br>";
}

?>