<?php

    $name = "Fred Flintstone";
    $fluff = substr($name, 6, 4); // $fluff is "lint"
    $sound = substr($name, 11); // $sound is "tone"
    echo $fluff . "<br>";
    echo $sound . "<br><br>";


    $sketch = <<< EndOfSketch
    Well, there's egg and bacon; egg sausage and bacon; egg and spam;
    egg bacon and spam; egg bacon sausage and spam; spam bacon sausage
    and spam; spam egg spam spam bacon and spam; spam sausage spam
    spam
    bacon spam tomato and spam;
    EndOfSketch;
    $count = substr_count($sketch, "spam");
    echo "The word spam occurs {$count} times." . "<br><br>";


    $greeting = "good morning citizen";
    $farewell = substr_replace($greeting, "bye", 5, 7);
    echo $farewell . "<br>";
    $farewell = substr_replace($farewell, "kind ", 9, 0);
    echo $farewell . "<br>";
    $farewell = substr_replace($farewell, "", 8);
    echo $farewell . "<br>";
    $farewell = substr_replace($farewell, "now it's time to say ", 0, 0);
    echo $farewell . "<br>";
    $farewell = substr_replace($farewell, "riddance", -3);
    echo $farewell . "<br>";
    $farewell = substr_replace($farewell, "", -8, -5);
    echo $farewell . "<br>";


    echo strrev('Programming PHP') . "<br>";
    echo str_repeat('PHP', 4) . "<br>";

    echo '[' . str_pad('Fred Flintstone', 30, ' ', STR_PAD_LEFT) . "]<br>";
    echo '[' . str_pad('Fred Flintstone', 30, ' ', STR_PAD_BOTH) . "]<br>";


    $input = 'Fred,25,Wilma';
    $fields = explode(',', $input);
    var_dump($fields);
    $fields = explode(',', $input, 2);
    var_dump($fields);


    // join e implode are sinonims
    $string = implode(',', array('PHP'=>'Programming language',
                                'Python'=>'Programming language'));
    echo $string . '<br><br>';


    $string = "Fred,Flintstone,35,Wilma";
    $token = strtok($string, ",");
    while ($token !== false) {
        echo("{$token}<br />");
        $token = strtok(",");
    }


    //$pos = strpos($large, ","); // find first comma
    $record = "Fred,Flintstone,35,Wilma";
    $pos = strrpos($record, ",");
    echo $pos . '<br>';
    $pos = strpos($record, ",");
    echo $pos . '<br><br>';


    $record = "Fred,Flintstone,35,Wilma";
    $rest = strstr($record, ",");
    echo $rest . '<br>';
    //stristr(): Case-insensitive strstr()


    $bits = parse_url("http://me:secret@example.com/cgi-bin/board?user=fred");
    print_r($bits);

?>