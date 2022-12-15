<?php

    $days = array(1 => "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
    var_dump($days);
    echo '<br><br>';


    // same as
    $whoops = array('Fri' => "Black", "Brown", "Green");
    $whoops = array('Fri' => "Black", 0 => "Brown", 1 => "Green");
    var_dump($whoops);
    echo '<br><br>';
    var_dump($whoops);
    echo '<br><br>';


    $family = array("Fred", "Wilma");
    $family[] = "Pebbles";
    var_dump($family);
    echo '<br><br>';


    echo var_dump(range('a', 'z'));
    echo '<br><br>';
    echo var_dump(range(2, 5));
    echo '<br><br>';


    $size = count($family);
    $size2 = sizeof($family);
    echo "{$size} -> {$size2}";
    echo '<br><br>';


    $scores = array(5, 10);
    $padded = array_pad($scores, 5, 0);
    var_dump($padded);
    echo '<br><br>';


    $row0 = array(1, 2, 3);
    $row1 = array(4, 5, 6);
    $row2 = array(7, 8, 9);
    $multi = array($row0, $row1, $row2);


    $value = $multi[2][0];
    $person = array("Fred", 35, "Betty");
    list($name, $age, $wife) = $person;
    echo $name . " -> " . $age . " -> " . $wife . "<br>";


    $values = range('a', 'e'); // use range to populate the array
    list($m, , $n, , $o) = $values;
    echo $m . " -> " . $n . " -> " . $o;


    $people = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
    $middle = array_slice($people, 2, 2);
    echo "<br>";
    var_dump($middle);
    echo "<br>";


    $nums = range(1, 7);
    $rows = array_chunk($nums, 3);
    echo "<br>";
    print_r($rows);
    echo "<br>";


    $person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
    $keys = array_keys($person);
    var_dump($keys);


    if (array_key_exists("name", $person)){
    	echo True;
    }else{
    	echo False;
    }


    $color = "indigo";
    $shape = "curvy";
    $floppy = "none";
    $a = compact("color", "shape", "floppy");
    echo "<br>";
    var_dump($a);
    echo "<br>";
    // or
    $names = array("color", "shape", "floppy");
    $a = compact($names);
    var_dump($a);
    echo "<br><br>";


    echo current($names) . "<br>";
    echo next($names) . "<br>";
    echo prev($names) . "<br>";
    echo end($names) . "<br>";
    echo reset($names) . "<br>";
    echo key($names) . "<br>";


    $addresses = array("spam@cyberpromo.net", "abuse@example.com");
    foreach ($addresses as $key => $value) {
    	echo "Fred's {$key} is {$value}";
    }


    $printRow = function ($value, $key)
    {
    	print("<tr><td>{$key}</td><td>{$value}</td></tr>\n");
    };
    $person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
    echo "<table border=1>";
    array_walk($person, $printRow);
    echo "</table>";


    $addresses = array("spam@cyberpromo.net", "abuse@example.com", "root@example.com");
    if (in_array("spam@cyberpromo.net", $addresses)){
        echo "exists";
    }else{
        echo "does not exist";
    }
    // A variation on in_array() is the array_search() function. While in_array() returns true if the value is found, array_search() returns the
    // key of the element


    $first = array("hello", "world"); // 0 => "hello", 1 => "world"
    $second = array("exit", "here"); // 0 => "exit", 1 => "here"
    $merged = array_merge($first, $second);
    var_dump($merged);
    echo "<br><br>";


    function isOdd ($element) {
        return $element % 2;
    }
    $numbers = array(9, 23, 24, 27);
    $odds = array_filter($numbers, "isOdd");
    var_dump($odds);
    echo "<br><br>";


    class BasicArray implements Iterator
    {
        private $position = 0;
        private $array = ["first", "second", "third"];
        
        public function __construct()
        {
            $this->position = 0;
        }

        public function rewind()
        {
            $this->position = 0;
        }

        public function current()
        {
            return $this->array[$this->position];
        }

        public function key()
        {
            return $this->position;
        }

        public function next()
        {
            $this->position += 1;
        }

        public function valid()
        {
            return isset($this->array[$this->position]);
        }
    }
    $basicArray = new BasicArray;
    foreach ($basicArray as $value) {
        echo "{$value}\n";
    }
    foreach ($basicArray as $key => $value) {
        echo "{$key} => {$value}\n";
    }


?>