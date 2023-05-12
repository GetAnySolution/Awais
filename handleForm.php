<?php 

if (isset($_POST['register'])) {
    $fileName = $_FILES['img']['name'];
    $tmpName = $_FILES['img']['tmp_name'];
    $type = $_FILES['img']['type'];
    echo $fileName;

    if ($type == 'image/jpg' || $type == 'image/png' || $type == 'image/jpeg') {

        if (move_uploaded_file($tmpName, 'uploads/' . $fileName)) {


            echo "<script> alert('image uploaded') </script>";
        }
    } else {
        echo "<script> alert('Please use supported file format, JPG , JPEG or PNG') </script>";
        echo "<script> window.location.href = 'form.php' </script>";


        // header('location: form.php');

    }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form Handling</h1>
    <img width="250" height="250" src="uploads/<?php echo $fileName?>" alt="">
    <pre>

<?php
// $ab = null;;
// echo isset($_POST['register']);
// if(false){

// echo false;

// }else{

// echo "False";


// }


// if (isset($_POST['register'])) {





    // print_r($_GET);

?>

<?php 
// print_r($_POST);
    // print_r($_FILES) ?>
</pre>
    <h2>Hello <?php echo "$_POST[fname] $_POST[lname] ";

                echo $_POST['city'];


                ?>



    </h2>
    <?php
   

    ?>





</body>

</html>
<?php }else{


echo "<script> window.location.href = 'form.php' </script>";


} ?>