<?php

    echo 3 . 2.74; // gives the string 32.74

    $var1 = 5;
    $var2 = 65;
    echo $var1 <=> $var2 ; // outputs -1
    echo ($var2 <=> $var1) . "<br>"; // outputs 1

    $var1 = null;
    $var2 = 31;
    echo ($var1 ?? $var2) . "<br>"; //outputs 31


    class Person
    {
    	var $name = "Fred";
    	var $age = 35;
    }
    $o = new Person;
    $a = (array) $o;
    print_r($a);


    $a = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
    $o = (object) $a;
    var_dump($o->name);


    $listing = `ls -ls /tmp`;
    echo $listing;


    $a = new Person;
    $isAFoo = $a instanceof Person; // true
    //$isABar = $a instanceof Bar;    false
    echo $isAFoo;


    $user_validated = true;
    if ($user_validated):
    	echo "Welcome!";
    	$greeted = 1;
    else:
   		echo "Access Forbidden!";
   		exit;
   	endif;

   	if ($user_validated) {
   		echo "Welcome!";
   		$greeted = 1;
   	}else {
   		echo "Access Forbidden!";
   		exit;
   	}


    switch($o) {
      case 'ktatroe':
      // do something
      break;
      case 'dawn':
      // do something
      break;
      case 'petermac':
      // do something
      break;
      case 'bobk':
      // do something
      break;
      default:
        print("Noup");
      break;
    }

    switch($o):
      case 'ktatroe':
      // do something
      break;
      case 'dawn':
      // do something
      break;
      case 'petermac':
      // do something
      break;
      case 'bobk':
      // do something
      break;
    endswitch;


    $total = 0;
    $i = 1;
    while ($i <= 10) {
    	$total += $i;
    	$i++;
    }


    $total = 0;
    $i = 1;
    while ($i <= 10):
    	$total += $i;
    	$i++;
    endwhile;


    $i = 0;
    $j = 0;
    while ($i < 10) {
    	while ($j < 10) {
    		if ($j == 5) {
    		    break 2; // breaks out of two while loops
    	    }
    	$j++;
        }
    $i++;
    }
    echo "<br>" . $i . " -> " . $j;


    $i = 0;
    $j = 0;
    while ($i < 10) {
    	$i++;
    	while ($j < 10) {
    		if ($j == 5) {
    		    continue 2; // continues through two levels
    	    }
    	$j++;
        }
    }
    echo "<br>" . $i . " -> " . $j . "<br>";


    $total = 0;
    $i = 1;
    do {
    	$total += $i++;
    } while ($i <= 10);


    for ($counter = 1; $counter <= 4; $counter++) {
    	echo "Counter is $counter <br/>";
    }

    for ($counter = 1; $counter <= 4; $counter++):
    	echo "Counter is $counter <br/>";
    endfor;

    $total = 0;
    for ($i = 0, $j = 1; $i <= 10; $i++, $j *= 2) {
    	$total += $j;
    }
    echo $total . "<br>";


    $person = array("Edison", "Wankel", "Crapper");

    foreach ($person as $current) {
    // ...
    }

    foreach ($person as $current):
    // ...
    endforeach;


    /*try {
    	$dbhandle = new PDO('mysql:host=localhost; dbname=library',
    		$username, $pwd);
    		doDB_Work($dbhandle); // call function on gaining a connection
    		$dbhandle = null; // release handle when done
    }catch (PDOException $error) {
  		print "Error!: " . $error->getMessage() . "<br/>";
   		die();
    }*/


    //directives
    function printName(){
    	echo "I am Michael<br>";
    }

    register_tick_function("printName");
    declare(ticks = 3) {// In this code, printName() is called after every third statement within the block is executed.
    	for($i = 0; $i < 2; $i++) {
    		$p=0;
    	}
    }

    // declare(encoding = "UTF-8");

    // You can use the strict_types directive to enforce the use of strict data types when defining and using variables.


    // die
    // die("Could not connect to database"); // The function die() is an alias for this form of the exit statement
    // $db = mysql_connect("localhost", $USERNAME, $PASSWORD) or die("Could not connect to database");


    // goto
    // The goto statement allows execution to “jump” to another place in the program. You specify execution points by adding a label, which is
    // an identifier followed by a colon (:)
    for ($i = 1; $i <= 10; $i++) {
        // oops, found an error
    	if ($i==4) {
    		goto cleanup;
    	}
    	echo "<br>I am in a for loop";
    }

    cleanup:
    echo "<br>I run goto";

?>