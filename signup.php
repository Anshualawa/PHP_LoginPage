<?php
$showAlert = false;
$showErro = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $err = "";
    include 'Components/mydb.php';
    $username = $_POST['username'];
    $password = $_POST['psword'];
    $cpassword = $_POST['cpsword'];
    // $exists == false;
    // Check whether this username Exists
    $existSql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        // $exists = true;
        $showError = ' Username Already exists';

    } else {
        $exists = false;

        if (($password == $cpassword) && $exists == false) {
            $sql = "INSERT INTO `users`(`username`, `password`, `date`) VALUES ('$username','$password',current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = ' Password do not match';
        }
    }
}


?>













<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php require "Components/_nav.php" ?>

    <?php
    if ($showAlert) {
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is created now you can login.
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
    ?>


    <div class="container">
        <h1> Signup to our website</h1>

        <form action="signup.php" method="POST">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Username</label>
                <input required type="text" class="form-control" id="username" name="username"
                    aria-describedby="emailHelp">

            </div>
            <div class="mb-3 col-md-6">
                <label for="psword" class="form-label">Password</label>
                <input required type="password" class="form-control" id="psword" name="psword">
            </div>
            <div class="mb-3 col-md-6">
                <label for="cpsword" class="form-label">Confirm Password</label>
                <input required type="password" class="form-control" id="cpsword" name="cpsword">
                <div id="emailHelp" class="form-text">Make sure to type the same password</div>
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>