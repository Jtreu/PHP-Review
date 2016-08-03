<?php
$current_user = 'Jameson';

$names = array(
	'Hampton',
	'Mike',
	'Charley'
);

function hello($arr) {
	if(is_array($arr)) {
		foreach($arr as name) {
			echo "Hello, $name, how's it going<br/>";
		}
	} else {
		echo 'Hello, friends!';
	}
}

hello();

function is_Jameson() {
	global $current_user;

	if($current_user == 'Jameson') {
		echo 'It is Jameson!';
	} else {
		echo 'It is not jameson'
	}
}

/* Using default argments */
function howdy($name = 'friend') {
	echo "Hello $name!";
}

/* Using the default set to null to check whether the user entered something or not */
function greet($name = 'friend', $time_of_day = Null) {
	if($time_of_day) {
		echo "Hi, $name, good $time_of_day";
	} else {
		echo "Hi, $name good day!";
	}
}

$name = 'Jameson';

/* Using Closures/Anonymous functions */
$greet = function() use($name){
	echo "Hello $name!";
};

$greet();

/* PHP Array Functions */
// Definition: When an Array has Keys and Values it is called an Associative Array
$names = array(
	'Mike' => 'Frog',
	'Chris' => 'Teacher',
	'Hampton' => 'Teacher'
);

/* echo's out the keys of the array (Mike, Chris, and Hampton) */
var_dump(array_keys($names));

function print_info($value, $key) {
	echo "$key is a $value.<br/>"
}

/* array_walk() applies a user supplied function to every member of the array */
array_walk($names, 'print_info');
?>