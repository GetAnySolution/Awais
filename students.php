<?php include 'header.php';
$query = "SELECT * FROM `students`";
$res = mysqli_query($conn, $query);




// print_r($res);


?>

<a href="update.php?stdid=6"><button>Update</button></a>

<table border="5" cellpadding = "20">

    <tr>

        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th> Address </th>
        <th>Gender</th>
        <th>State</th>
        <th>City</th>
        <th>Picture</th>
        <th>Update/Delete</th>

    </tr>




    <?php
    //   print_r(mysqli_fetch_all($res));
    //   print_r(mysqli_fetch_assoc($res));
    //   print_r(mysqli_fetch_assoc($res));
    //   print_r(mysqli_fetch_assoc($res));
    //   print_r(mysqli_fetch_assoc($res));
    //   print_r(mysqli_fetch_assoc($res));
    while ($row =  mysqli_fetch_assoc($res)) {

        // print_r($row);



    ?>
        <tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['firstName']?></td>
<td><?php echo $row['lastName']?></td>
<td><?php echo $row['address']?></td>
<td><?php echo $row['gender']?></td>
<td><?php echo $row['state']?></td>
<td><?php echo $row['city']?></td>
<td><img height="100" width="100" src="uploads/<?php echo $row['picture']?>" alt=""> </td>
<td> <a href="update.php?stdID=<?php echo $row['id']?>"><button class="btn btn-primary"> Update </button></a> 
 <a href="delete.php?delID=<?php echo $row['id']?>"><button class="btn btn-danger"> Delete </button></a> </td>




        </tr>
    <?php } ?>
</table>


<section>












</section>

<?php include 'footer.php' ?>