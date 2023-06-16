<?php include 'config.php';
session_start();
if (isset($_SESSION['admin'])) {


    echo "<script> window.location.href = 'index.php' </script>";
}

// print_r($_SESSION);
if (isset($_POST['login'])) {
    // print_r($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `ADMIN` WHERE `email` = '$email' AND `password` = '$password' ";
    $res = mysqli_query($conn, $query);
    // echo mysqli_num_rows($res);

    // print_r($res);
    if (mysqli_num_rows($res) == 1) {

        $admin =  mysqli_fetch_assoc($res);
        $adminEmail =  $admin['email'];
        $adminName =  $admin['name'];
        $adminPic =  $admin['picture'];
        $_SESSION['admin'] = $adminName;
        $_SESSION['email'] = $adminEmail;
        $_SESSION['pic'] = $adminPic;

        if(isset($_POST['rememberme'])){
        setcookie('email',$adminEmail,time()+3600,'/');
        setcookie('password',$password,time()+3600,'/');
    }else{
        setcookie('email',$adminEmail,time()-3600,'/');
        setcookie('password',$password,time()-3600,'/');


    }

        echo "<script> alert('login success') </script>";
        echo "<script> window.location.href = 'index.php' </script>";
    } else {

        echo "<script> alert('email or password is incorrect !') </script>";
        echo "<script> window.location.href = 'index.php' </script>";
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section class="vh-100  bg-success">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="adminlogin.php" method="post">

                                    <h2 class="fw-bold mb-2 text-uppercase">Admin Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" value="<?php echo @$_COOKIE['email'] ?>" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" value="<?php echo @$_COOKIE['password'] ?>"/>
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="checkbox" id="typePasswordX" name="rememberme" <?php if(isset($_COOKIE['email'])){  echo "checked";} ?> />
                                        <label class="form-label" for="typePasswordX">Remeber Me </label>
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5" name="login" type="submit">Login</button>

                                </form>

                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>





</html>