<?php
/*ways to sort an array:
 * sort($array);
 * asort($array); //will keep keys in an assosiative array and indexed arrays
 * ksort($array); //will sort an array by it's key 
 */

$authors = array ("Charles Richards", "Jane Austin", "William Shakespeare", 
    "Mark Twain", "Louisa May Alcott");
$books = ["Little Women", "Jane Eyre", "Richard III", "Oliver Twist"];
//print_r($book);

$authors_associative = array(
    "quarky" => "Charles Richards",
    10 => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain",
    12,
    "creative" => "Julius Alvarado"
);

//print_r($authors_associative);

//echo $authors[1], ", ", $authors_associative["poetic"], ", ", 
//        array_key_exists("quarky", $authors_associative); 

//echo in_array("Jane Austin", $authors_associative);
//echo in_array("12", $authors_associative, true);

//echo count($authors);

function foo1() {
    global $authors; 
    foreach($authors as $val) {
        echo $val."\n";
    }    
}

function foo2() {
    global $authors_associative; 
    foreach($authors_associative as $key => $val) {
        echo $key." == ".$val."\n"; 
    }
}

foo2();

$multidim_array = array(
    "Male" => array(
        "first male" => array("book one", "book two", "book three"),
        "second male" => array(
            "book one",
            "book two",
            "book three"
        ),
        "third male" => array(
            "book one",
            "book two",
            "book three"
        )
    ),
    "Female" => array(
        "1st female" => array(
            "song 1",
            "song 2",
            "song 3"
        ),
        "2nd female" => array(
            "song 1",
            "song 2",
            "song 3"
        ),
        "3rd female" => array(
            "song 1",
            "song 2",
            "song 3"
        )
    )
);

print_r($multidim_array["Female"]["3rd female"][2]);

