<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <h1>Local, Global & Static Variables</h1>

    <?php

    $b = 12;
    $c = 1.49;

    function  myFunc()
    {

        // global $b;
        static $a = 15;
        $a++;
        echo "<br/>";
        echo $a;
        // echo $b;


    }
    $num = 12;

    if (is_int($num)) {


        // echo "<h1> Integer is Valid </h1>";



        
        // echo is_int($num);

        // myFunc();
        // myFunc();
        // myFunc();

        // echo gettype($c);
        // var_dump($c)
        
    ?>
        <h1 class="int">Integer is Valid</h1>

    <?php } else {
        
        echo "<script>alert('Please Enter a Valid Intiger')</script>";
    } ?>
</body>
        <style>
            .int{
                color:blue;
        
        
        
            }
        </style>

</html>