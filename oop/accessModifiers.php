<pre>

<?php

class Employee1
{

    public $name, $gender, $department;

    protected $id;

    private $salary;

    protected function getData($ID, $sal)
    {

        $this->id = $ID;
        $this->salary = $sal;
    }
    function show()
    {

        echo    $this->id;
        echo $this->salary;
    }


    function getValues($id, $salary)
    {

        $this->getData($id, $salary);
    }
}

class Manager1 extends Employee1
{

    private  $salary;

    function getID($id, $sal)
    {

        $this->id = $id;
        $this->id = $id;

        echo $this->id;
        $this->salary = $sal;
    }


    function showSal()
    {

        echo $this->salary;
    }
}




$emp1 = new Employee1();
$emp1->getValues(103, 56000);

$emp1->show();

$manager = new Manager1();
$manager->getID(333, 54888);

$manager->showSal();











?>


</pre>