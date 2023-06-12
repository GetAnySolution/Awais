<?php

// Person is a Parent/Base Class

    class Person
    {
    function __construct()
    {
        echo "</br>" . "Person Constructor Function" . "</br>";
        
    }
    
        public $id, $name, $email, $contact, $gender;
    }
    
    
    //Student is the child class of person
    class Student extends Person
    {
    
        function __construct($studentId, $studentName, $stdEmail, $stdContact, $stdGender)
        {
            echo "</br>" . "Student Constructor Function" . "</br>";
            $this->id = $studentId;
            $this->name = $studentName;
            $this->email = $stdEmail;
            $this->contact = $stdContact;
            $this->gender = $stdGender;
        }
    
        public $course;
    
    
    
        function showData()
        {
    
            echo  "ID: " . $this->id . "</br>";
            echo "Name: " .  $this->name . "</br>";
            echo "Email: " . $this->email . "</br>";
            echo  "Contact: " . $this->contact . "</br>";
            echo "Gender: " .  $this->gender . "</br>";
        }
    }
    
    
    
    class Employee extends Person {
    
        public  $department , $salary;
    
    
    
    }
    
    class Manager extends Employee {
    
    public $designation; 
    
    
    
    }









// $s1 = new Student(123, "Ali", "ali@gmail.com", "03126548", "male");
 $e1 = new Employee;

 $m1 = new Manager();


