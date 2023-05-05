<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // $num = 43;
    // if ($num % 2 == 0) {

    //     echo "Even";
    // } else if ($num % 2 == 1) {


    //     echo "Odd";
    // } else {

    //     echo "Invalid Number";
    // }


    // switch (2) {
    //     case "a":
    //         echo "monday";
    //         break;

    //     case 2:
    //         echo "tuesday";
    //         break;



    //     default:
    //         echo "Invalid Number";
    // }


    // $num1 = 4;


    // $num1 += 5;

    // $num1 *= 3;

    // echo $num1;




    // $arr = array(1,2,3,4,"ab","cd");
    $arr = [1, 2, 3, 4, "ab", "cd"];

    // echo $arr[4];
    // var_dump($arr);
    // echo $arr;




    ?>

    <pre>


<?php
print_r($arr);

// echo count($arr);

?>

<ol>
<?php
for ($i = 0; $i < count($arr); $i++) {



?>

<li> <?php echo $arr[$i];
    } ?></li>


<!-- <br> -->

</ol>


</pre>
    <pre>
<?php

$multiArr = [[1, "Uzair", "Male",  "Red"], [2, "Rafay", "Male",  "Blue"], [3, "Haroon", "Male", "Black"], [4, "Maryam", "Female", "Black"]];

$arr2 =  [3, "Haroon", "Black"];
print_r($multiArr);
echo $multiArr[1][1];





?>



</pre>

    <table border="2">

        <tr>
            <th>StudentID</th>
            <th>StudentName</th>
            <th>Gender</th>
            <th>FavColor</th>
        </tr>

        <?php
        // foreach ($arr as $element) {
        //     echo $element . "</br>";
        // }

        foreach ($multiArr as $item) {






        ?>
            <tr>
                <?php foreach ($item as $value) { ?>
                    <td><?php echo $value ?></td>

                <?php } ?>
            </tr>

        <?php
        } ?>


    </table>







</body>

</html>