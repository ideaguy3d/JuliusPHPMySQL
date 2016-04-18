<?php

class JPerson
{
    const  AVG_HEIGHT = 70;
    public $firstName, $lastName, $dob;

    function __construct($firstNameTemp = "", $lastNameTemp = "", $dobTemp = "") {
        $this->firstName = $firstNameTemp;
        $this->lastName = $lastNameTemp;
        $this->dob = $dobTemp;
    }

    public function getFirstName() {
        return $this->firstName.PHP_EOL;
    }

    public function setFirstName($firstName2Set) {
        $this->firstName = $firstName2Set;
    }

    public function getFullName() {
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends JPerson
{
    public static $mostPopularCentury = "19th";
    public $penName = "Romulus Augustus";

    function getPenName() {
        return $this->penName;
    }

    function getCompleteName() {
        //return parent::getFullName();
        return $this->firstName." ".$this->lastName." aka ".$this->penName.PHP_EOL;
    }

    public static function getMostPopularCentury() {
        return self::$mostPopularCentury." century was the most popular.";
    }
}

$newAuthor = new Author("Lucius", "Antonius", "April 17th");
echo Author::getMostPopularCentury();
