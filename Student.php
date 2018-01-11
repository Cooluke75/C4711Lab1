<?php

/**
 * Student.php
 * Student class that holds information on the students such as first name,
 * last name, email addresses, grades.
 *
 * @author Luke Lee
 * @version Jan. 11, 2018
 */
class Student {
    
    /*
     * Student constructor.
     * Includes surname, first name, an array of emails, an array of grades
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /*
     * Adds email address with a given key
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /*
     * Adds grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /*
     * Returns the average grade from the grade array
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /*
     * Returns a string representing the information of the student
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what) {
            $result .= $which . ': '. $what. "\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
