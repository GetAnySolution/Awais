<pre>

<?php



abstract class Cricket
{

    public $captain, $teamName, $opener1, $opener2;

    abstract function show();
}

class PCT extends Cricket
{

    function __construct($captain, $teamName, $opener1, $opener2)
    {

        $this->captain = $captain;
        $this->teamName = $teamName;
        $this->opener1 = $opener1;
        $this->opener2 = $opener2;
    }

    function show()
    {

        echo  $this->captain;
        echo  $this->teamName;
        echo  $this->opener1;
        echo  $this->opener2;
    }
}

$c1 = new PCT("Babar Azam", "Pakistan", "Babar", "Rizwan");
$c1->show();
?>

</pre>