<?php
class Student{
    var $firstName, $lastName;

    function set_FirstName($inpFirstName){
        $this->firstName = $inpFirstName;
    }
    function set_LastName($inpLastName){
        $this->lastName = $inpLastName;
    }

    function get_Name(){
        $strOut = $this->firstName." ".$this->lastName;
        return $strOut;
    }
}

?>
