<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Introduction to PHP</h1>   

<!-- <h2> -->

    <?php

$a = "Hassan Nadeem abcd e ";     // $variable_name = value;
$b = 123;
$c = true ;
$d = 1.334;
$e;

 $f = floatval($b);

var_dump($a);
echo "<br/>";
var_dump($b);
echo "<br/>";
var_dump($c);
echo "<br/>";
var_dump($d);
echo "<br/>";
var_dump($e);
echo "<br/>";
var_dump($f);

// echo $a , 123;

// print($a . 123);
// $a = "<h1> Ali </h1>";  


// echo $a;
// print($a);

echo strlen($a);
echo "<br/>";
echo str_word_count($a);


define("pi","3.142");
// define("pi","3.12");
echo pi ;
?>
<!-- </h2> -->




</body>
</html>