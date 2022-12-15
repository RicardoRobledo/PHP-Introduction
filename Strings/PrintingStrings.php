<?php

    // There are four ways to send output to the browser. The echo construct lets you print many values at once, while print() prints
    // only one value. The printf() function builds a formatted string by inserting values into a template. The print_r() function is
    // useful for debugging; it prints the contents of arrays, objects, and other things in a more or less human-readable form.

    echo "Printy<br>";
    echo("Printy<br>");
    echo "First", "second", "third<br>";

    if (print("test\n<br>")) {
    	print("It worked!<br>");
    }

    //print_r() and var_dump()
    $a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
    print_r($a);

    class P {
    	var $name = 'nat';
    }

    print_r(new P());
    // The var_dump() function displays any PHP value in a human-readable format

    var_dump(true);
    var_dump(false);
    var_dump(null);
    var_dump(array('name' => "Fred", 'age' => 35));

?>