<?php

    $length = strlen("PHP");
    echo $length;

    //unlink('func.txt'); // delete a file

    function outer ($a)
    {
    	function inner ($b)
    	{
    		echo "there $b";
    	}
    	echo "$a, hello ";
    }
    // outputs "well, hello there reader"
    outer("well");
    inner("reader<br>");


    function getPreferences($whichPreference = 'all'){}
    // func_get_args() returns an array of all parameters provided to the function.
    // func_num_args() returns the number of parameters provided to the function.
    // func_get_arg() returns a specific argument from the parameters.

    //To declare a function with a variable number of arguments, leave out the parameter block entirely:
    function getPreferences2(){
    	echo func_num_args();
    }
    getPreferences2(2, 4, 8, 10);


    // Type hinting
    class Entertainment {}
    class Clown extends Entertainment {}
    class Job {}

    function handleEntertainment(Entertainment $a, callable $callback=NULL)
    {
    	echo "Handling " . get_class($a) . " fun\n";
    	if ($callback !== NULL) {
    		$callback();
    	}
    }

    $callback = function(){
        // do something
    };

    handleEntertainment(new Clown, $callback); // works
    //handleEntertainment(new Job, $callback); // runtime error


    function sum($value, $value2) : int {return $value+$value2;}
    echo sum(4, 2);


    //variable functions
    $which = 'sumValues';
    function sumValues($which){
    	switch ($which) {
    	case 'first':
    	    echo sum(4, 2);
    	break;
    	case 'second':
    	    echo sum(4, 4);
    	break;
    	case 'third':
    	    echo sum(4, 8);
    	break;
        }
    }
    if (function_exists($which)) {
        $which('second'); // if $which is "first", the function first() iscalled, etc...
    }else{
    	echo 'nonexistent function';
    }

?>