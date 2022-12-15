<?php

    class Person
    {

    	public $name;
    	public $age; 

    	public function __construct($name=null, $age=null)
    	{
    		$this->name=$name;
    		$this->age=$age;
    	}
    	

    	public static function showMessage()
    	{
    		echo("Hello PHP");
    	}
    }

    $f = new Person("Michael", 14);
    $b = clone $f;
    var_dump($f);
    echo("<br>");
    var_dump($b);
    echo("<br><br>");
    Person::showMessage();


    class ProgrammingLanguage{static $global = 'PHP';}
    class PHP extends ProgrammingLanguage{}
    $php = new PHP();
    var_dump($php);


    interface Jaguar{
    	function printOutput();
    }   


    class PaymentMethod implements Jaguar{
    	public const TYPE_CREDITCARD = 0;
    	public const TYPE_CASH = 1;

    	function printOutput(){

    	}
    }


?>