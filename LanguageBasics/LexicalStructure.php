<?php

    define('PUBLISHER', "O'Reilly Media"); // Constant
    echo PUBLISHER;

    $x = 4;    

    if (is_int($x)) {
        // $x is an integer
        echo $x;
    }

    $x = 4.4;

    if (is_float($x)) {
        // $x is a float
        echo $x;
    }

    echo 'Your are $x years old';
    echo "Your are $x years old";

    $x = "Hello";

    if(is_string($x)){
    	echo "$x I am a string";
    }

    $x = true;

    if(is_bool($x)){
    	echo "$x<br/><br/>";
    }


    $person[0] = "Edison";
    $person[1] = "Wankel";
    $person[2] = "Crapper";

    $creator['Light bulb'] = "Edison";
    $creator['Rotary Engine'] = "Wankel";
    $creator['Toilet'] = "Crapper";


    $person2 = array("Edison", "Wankel", "Crapper");
    $creator2 = array('Light bulb' => "Edison",
    	            'Rotary Engine' => "Wankel",
                    'Toilet' => "Crapper");

    echo $person[0] . " -> " . $creator['Toilet'] . " -> " . $person2[0] . " -> " . $creator2['Rotary Engine'] . "<br>";


    foreach ($person as $name) {
    	echo "Hello, {$name}<br/>";
    }

    foreach ($creator as $invention => $inventor) {
        echo "{$inventor} invented the {$invention}<br/>";
    }

    echo "<br>";

    sort($person);
    asort($creator);

    foreach ($person as $name) {
    	echo "Hello, {$name}<br/>";
    }
    
    foreach($creator as $invention => $inventor){
    	echo "{$invention} was made up by $inventor<br/>";
    }

    if(is_array($person)){
    	echo "It is an array<br>";
    }

    
    class Person
    {

    	public $name = '';

    	function name ($newname = NULL)
    	{
    		if (!is_null($newname)) {
    			$this->name = $newname;
    		}
    		return $this->name;
    	}

    }

    $person = new Person();

    if(is_object($person)){
    	echo "It is an object<br>";
    }


    $x = null;
    if(is_null($x)){
        echo "Es null";
    }


    if(is_resource($x)){
    	echo "It is a resource";
    }


    #callback
    $callback = function()
    {
    	echo "<br>callback achieved<br>";
    };

    call_user_func($callback);


    $foo = "bar";
    $$foo = "baz";


    #variable variables
    echo $foo;
    echo $$foo;


    $black =& $foo;

    echo $black;

    
    #variable references
    $bigLongVariableName = "PHP";
    $short =& $bigLongVariableName;
    $bigLongVariableName .= " rocks!";
    print "<br><br>\$short is $short";
    print "<br>Long is $bigLongVariableName";

    $short = "Programming $short";
    print "<br>\$short is $short";
    print "<br>Long is $bigLongVariableName";

    unset($short);
    print "<br>" . $bigLongVariableName;


    #this function returns a variable reference
    function &retRef() // note the &
    {
    	$var = "PHP"; // local scope
    	return $var;
    }
    $v =& retRef(); // note the &
    echo "<br><br>" . $v;


    function updateCounter()
    {
    	global $counter; // global scope
    	$counter++;
    }
    $counter = 10;
    updateCounter();

    echo '<br>' . $counter;

    $GLOBALS['counter']++; // we also can use globals
    echo '<br>' . $GLOBALS['counter'] . '<br>';


    function updateCounter2()
    {
    	static $counter = 0;
    	$counter++;
    	echo "<br>Static counter is now {$counter}";
    }

    $counter = 10;
    updateCounter2();
    echo "Global counter is {$counter}";
    updateCounter2();
    echo "Global counter is {$counter}";


    function greet($name)
    {
    	echo "<br>Hello, {$name}";
    }
    greet("Janet");


    $s1 = isset($n); // $s1 is false
    $n = "Fred";
    $s2 = isset($n);
    echo $s1;
    echo $s2;
    unset($s1); // remove a variable's value

?>