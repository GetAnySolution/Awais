<pre>
<?php

class Student
{

    function __construct($studentId, $studentName, $stdEmail, $stdContact, $stdGender)
    {
        // echo "</br>" . "Constructor Function" . "</br>";
        $this->id = $studentId;
        $this->name = $studentName;
        $this->email = $stdEmail;
        $this->contact = $stdContact;
        $this->gender = $stdGender;
    }

    //properties 
    public $id, $name, $email, $contact, $gender;


    // function putData($studentId, $studentName, $stdEmail, $stdContact, $stdGender)
    // {

    //     $this->id = $studentId;
    //     $this->name = $studentName;
    //     $this->email = $stdEmail;
    //     $this->contact = $stdContact;
    //     $this->gender = $stdGender;
    // }
    function showData()
    {

        echo  "ID: " . $this->id . "</br>";
        echo "Name: " .  $this->name . "</br>";
        echo "Email: " . $this->email . "</br>";
        echo  "Contact: " . $this->contact . "</br>";
        echo "Gender: " .  $this->gender . "</br>";
    }
}



$s1 = new Student(123, "Ali", "ali@gmail.com", "03126548", "male");
// $s1->id = 123;
// $s1->name = "Ali";
// $s1->email = "ali@gmail.com";
// $s1->contact = "0345236589";

// $s1->putData(123, "Ali", "ali@gmail.com", "03126548", "male");


// echo $s1->name;




print_r($s1);


$s2 = new Student(22, "waseem", "waseem@gmail.com", "03126548", "male");
// $s2->putData(22, "waseem", "waseem@gmail.com", "03126548", "male");

$s1->showData();
$s2->showData();


// $s3 = new Student();

?></pre>