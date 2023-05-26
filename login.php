<?php
$login = false;
$showErro = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $err = "";
    include 'Components/mydb.php';
    $username = $_POST['username'];
    $password = $_POST['psword'];


    $sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header("location: welcome.php");

    } else {
        $showError = ' Invalid Credential! ';
    }
}


?>













<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php require "Components/_nav.php" ?>

    <?php
    if ($login) {
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are loged in .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>';
    }
    if ($showError) {
        echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong> ' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>';
    }


    //  ''
    ?>



    <div class="container">
        <div class="row p-5">
            <div class="col-6">
                <h1> Login to our website</h1>
                <form action="login.php" method="POST">
                    <div class="mb-3 col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input required type="text" class="form-control" id="username" name="username"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="psword" class="form-label">Password</label>
                        <input required type="password" class="form-control" id="psword" name="psword">
                    </div>

                    <div class="mb-3 col-md-6 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <!-- <button type="submit" class="btn btn-primary">SignUp</button> -->
                </form>
            </div>
            <!-- <div class="col-6" style="background:url('https://cdn.pixabay.com/photo/2019/06/17/19/48/source-4280758_1280.jpg');background-size:100%"> -->
            <!-- <div class="col-6" style="background:url('https://cdn.pixabay.com/photo/2016/03/27/07/12/apple-1282241_1280.jpg');background-size:100% 100%"> -->
            <div class="col-6"
                style="background:url('https://cdn.pixabay.com/photo/2016/11/29/08/41/apple-1868496_1280.jpg');background-size:100%">
            </div>

        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <?php require "Components/_carouselLogin.php" ?>
            </div>
            <div class="col-2"></div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>