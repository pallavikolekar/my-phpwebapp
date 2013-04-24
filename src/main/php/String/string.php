<?php
echo " This is string class";
class String
{
    //contains the internal data
    public $data;

    // constructor
    function String($data) {
        $this->data = $data;
    }

    // creates a deep copy of the string object
    function copy() {
    }

    // adds another string object to this class
    function add($string) {
    }

    // returns the formated string
    function toString($format) {
    }
}
?>