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

$multiArr = [
    [1, "Uzair", "Male",  "Red"], [2, "Rafay", "Male",  "Blue"],
    [3, "Haroon", "Male", "Black"], [4, "Maryam", "Female", "Black"]
];

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
    <br>
    <br>
    <br>
    <br>
    <pre>
    <?php
    $assoc = ["studentID" =>  1, "studentName" => "Ali", "gender" =>  "Male", "Age" => 12];
    // echo $assoc["studentName"];
    $students = [
        "student1" =>   ["studentID" =>  1, "studentName" => "Ali", "gender" =>  "Male", "Age" => 12],
        "student2" =>  ["studentID" =>  2, "studentName" => "Uzair", "gender" =>  "Male", "Age" => 60],
        "student3" =>  ["studentID" =>  3, "studentName" => "Shahmeer", "gender" =>  "Male", "Age" => 90]
    ];
    // print_r($students);

    // $std1 = $students[1];

    // print_r($std1["studentName"]);
    // echo $students[1]["gender"];
    // foreach ($students as $key => $stdData) {
    //     echo "This is Key :  $key <br/>";
    //     print_r($stdData);



    // }


    ?>
</pre>

    <table border="1" cellpadding="12">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $key => $stdData) {


        ?>
            <tr>

                <?php foreach ($stdData as $key => $value) {
                ?>
                    <td><?php echo $value ?></td>

                <?php } ?>
            </tr>
        <?php } ?>



    </table>




    <table border="1" cellpadding="12">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $key => $stdData) {

            echo "<tr>";
            foreach ($stdData as $key => $value) {

                echo "<td> $value </td>";
            }



            echo "</tr>";
        } ?>




    </table>


</body>

</html>