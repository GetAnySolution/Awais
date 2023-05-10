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
    <pre>

<?php 
// $ab = null;;
// echo isset($_POST['register']);
// if(false){

// echo false;

// }else{

// echo "False";


// }


if(isset($_POST['register'])){





// print_r($_GET);

?>

<?php print_r($_POST) ?>
</pre>
<h2>Hello <?php echo "$_POST[fname] $_POST[lname] ";

echo $_POST['city'];


?>



</h2>
<?php }?>

</body>

</html>