<?php
$foo = "will shake spear";

//listOfBooks(); 
//bookAuthor($foo);

function bookAuthor ($authorName) {
    echo $authorName;
}

function listOfBooks() {
    echo "Derivative Calculus \n";
    echo "Integration Calculus \n";
}

function booksByAuthorYear($tempAuthName = "j.Alvarado", $tempYear=2016){
    echo "\n--------------------\n";
    echo $tempAuthName;
    echo "\n";
    echo $tempYear;
    echo "\n";
}

function getAuthor() {
    return "I AM WHAT I AM"; 
}

$year = 1999;
$authorName = getAuthor();
$variableFunction = "getAuthor"; 
$authorName2 = "Britnany Spears";

function setAuthorName() {
 global $authorName2;
 $authorName2 = "I CAUSE TO BE WHAT I CAUSE TO BE";    
}

//booksByAuthorYear($authorName);
setAuthorName(); 
echo $authorName2; 



