<?php

    //header('Content-Type: text/plain;');

    $name = 'PHP';
    echo "$name is a programming language";
    echo "{$name} is a programming language";


    //heredoc
    $clerihew = <<< EndOfQuote
    Sir Humphrey Davy
    Abominated gravy.
    He lived in the odium
    Of having discovered sodium.

    EndOfQuote;
    echo $clerihew;

    $clerihew = <<< StufftoSay
    The quick brown fox
    Jumps over the lazy dog
    StufftoSay;
    echo $clerihew . "<br><br>";


    // trim() returns a copy of string with whitespace removed from the beginning and the end. ltrim() (the l is for left) does the same, but
    // removes whitespace only from the start of the string. rtrim() (the r is for right) removes whitespace only from the end of the string

    $title = " Programming PHP \n";
    $str1 = ltrim($title); // $str1 is "Programming PHP \n"
    $str2 = rtrim($title); // $str2 is " Programming PHP"
    $str3 = trim($title); // $str3 is "Programming PHP"
    echo $str1 . "<br>";
    echo $str2 . "<br>";
    echo $str3 . "<br><br>";


    $string1 = "FRED flintstone";
    $string2 = "barney rubble";
    echo strtolower($string1) . "<br>";
    echo strtoupper($string1) . "<br>";
    echo ucfirst($string2) . "<br>";
    echo ucwords($string2) . "<br>";


    $name = "Programming PHP";
    $output = rawurlencode($name);
    echo "http://localhost/{$output}";


    $baseUrl = 'http://www.google.com/q=';
    $query = 'PHP sessions -cookies';
    $url = $baseUrl . urlencode($query);
    echo $url;


    // Comparing strings
    $n = strcmp("PHP Rocks", 5);
    echo $n . "<br>";
    $n = strcasecmp("Fred", "frED");
    echo $n . "<br>";


    //The strncmp() and strncasecmp() functions take an additional argument, the initial number of characters to use for the comparisons
    $known = "Fred";
    $query = "Phred";
    if (soundex($known) == soundex($query)) {
        print "soundex: {$known} sounds like {$query}<br>";
    }else {
        print "soundex: {$known} doesn't sound like {$query}<br>";
    }
    if (metaphone($known) == metaphone($query)) {
        print "metaphone: {$known} sounds like {$query}<br>";
    }else {
        print "metaphone: {$known} doesn't sound like {$query}<br>";
    }


    $string1 = "Rasmus Lerdorf";
    $string2 = "Razmus Lehrdorf";
    $common = similar_text($string1, $string2, $percent);
    printf("They have %d chars in common (%.2f%%).", $common, $percent);

    $similarity = levenshtein("cat", "cot");
    echo "<br>" . $similarity;

    echo levenshtein('would not', 'wouldn\'t', 500, 1, 1);


?>