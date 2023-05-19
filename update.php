<?php

use function PHPSTORM_META\type;

include 'header.php';
// $stdID = $_GET['stdID'];
if (isset($_POST['update'])) {
    $studentID = $_POST['studentID'];
    $fname =   $_POST['fname'];
    $lname =   $_POST['lname'];
    $address =   $_POST['address'];
    $gender =   $_POST['gender'];
    $state =   $_POST['state'];
    $city =   $_POST['city'];
    $fileName = $_FILES['img']['name'];
    $tmpName = $_FILES['img']['tmp_name'];
    $type = $_FILES['img']['type'];

    if ($type == 'image/jpg' || $type == 'image/png' || $type == 'image/jpeg') {

        $update = "UPDATE `students` SET `firstName` = '$fname',
        `lastName` = '$lname', `address`= '$address' ,  `gender` = '$gender', 
        `state` = '$state', `city` = '$city' ,
        `picture` = '$fileName' WHERE `id` = $studentID";

        $updateRes = mysqli_query($conn, $update);
        if ($updateRes) {
            if (move_uploaded_file($tmpName, 'uploads/' . $fileName)) {


                echo "<script> window.location.href = 'students.php' </script>";
                // echo "<script> alert('image uploaded') </script>";
            }
        }
    } else {
        // echo "<script> alert('Please use supported file format, JPG , JPEG or PNG') </script>";
        echo "<script> window.location.href = 'update.php?stdID=$studentID' </script>";


        // header('location: form.php');

    }
}






if (isset($_GET['stdID'])) {
    $stdID = $_GET['stdID'];
    $query = "SELECT * FROM `students` where `id` = $stdID";
    $res =  mysqli_query($conn,  $query);
    // print_r($res);
    // print_r(mysqli_fetch_assoc($res));
    $data = mysqli_fetch_assoc($res);
    print_r($data);






    // print_r($_GET);

?>



    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Update Information</h3>

                                    <form action="update.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="studentID" value="<?php echo $data['id'] ?>">
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m" name="fname" class="form-control form-control-lg" value="<?php echo $data['firstName'] ?>" />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n" name="lname" class="form-control form-control-lg" value="<?php echo $data['lastName'] ?>" />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m1">Mother's name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n1">Father's name</label>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" value="<?php echo $data['address'] ?>" />
                                            <label class="form-label" for="form3Example8">Address</label>
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" <?php if ($data['gender'] == 'female') {

                                                                                                                                                echo "checked";
                                                                                                                                            }  ?> />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" <?php if ($data['gender'] == 'male') {

                                                                                                                                            echo "checked";
                                                                                                                                        }  ?> />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" <?php if ($data['gender'] == 'other') {

                                                                                                                                                echo "checked";
                                                                                                                                            }  ?> />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <select class="select" name="state">
                                                    <option>State</option>
                                                    <option value="sindh" <?php if ($data['state'] == 'sindh') {

                                                                                echo "selected";
                                                                            }  ?>>Sindh</option>
                                                    <option value="punjab" <?php if ($data['state'] == 'punjab') {

                                                                                echo "selected";
                                                                            }  ?>>Punjab</option>
                                                    <option value="KPK" <?php if ($data['state'] == 'KPK') {

                                                                            echo "selected";
                                                                        }  ?>>KPK</option>
                                                </select>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <select class="select" name="city">
                                                    <option>City</option>
                                                    <option value="KHI" <?php if ($data['city'] == 'KHI') {

                                                                            echo "selected";
                                                                        }  ?>>Karachi</option>
                                                    <option value="LHR" <?php if ($data['city'] == 'LHR') {

                                                                            echo "selected";
                                                                        }  ?>>Lahore</option>
                                                    <option value="Peshawar" <?php if ($data['city'] == 'Peshawar') {

                                                                                    echo "selected";
                                                                                }  ?>>Peshawar</option>
                                                </select>

                                            </div>
                                        </div>







                                        <!-- <div class="form-outline mb-4">
                                        <input type="text" name="email" id="form3Example97" class="form-control form-control-lg" value="<?php echo $data['email'] ?>" />
                                        <label class="form-label" for="form3Example97">Email ID</label>
                                    </div> -->
                                        <div class="form-outline mb-4">
                                            <input type="file" id="form3Example8" name="img" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Upload Image</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">

                                            <button type="submit" name="update" class="btn btn-warning btn-lg ms-2">Update</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









<?php include 'footer.php';
}
?>