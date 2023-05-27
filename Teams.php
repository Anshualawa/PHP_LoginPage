<?php

session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPL 2023 -
        <?php echo $_SESSION['username'] ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php require "Components/_nav.php" ?>



    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $TeamCode = $_POST['TeamCode'];
    }

    switch ($TeamCode) {
        case ('PBKS'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'PBKS'";
            $teamName = 'Punjab Kings';
            break;
        case ('GT'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'GT'";
            $teamName = 'Gujarat Titans';
            break;
        case ('DC'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'DC'";
            $teamName = 'Delhi Capitals';
            break;
        case ('CSK'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'CSK'";
            $teamName = 'Chennai Super Kings';
            break;
        case ('RR'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'RR'";
            $teamName = 'Rajasthan Royals';
            break;
        case ('SRH'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'SRH'";
            $teamName = 'Sunrisers Hyderabad';
            break;
        case ('MI'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'MI'";
            $teamName = 'Mumbai Indians';
            break;
        case ('RCB'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'RCB'";
            $teamName = 'Royal Challengers Bangalore';
            break;
        case ('KKR'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'KKR'";
            $teamName = 'Kolkata Knight Riders';
            break;
        case ('LSG'):
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'LSG'";
            $teamName = 'Lucknow Super Giants';
            break;

        default:
            $sql = "SELECT name,squadeCategory,img FROM PlayerList WHERE TeamName = 'PBKS'";
            break;
    }




    include 'Components/mydb.php';

    // $sql = "SELECT name,squadeCategory,img FROM PlayerList";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($result->num_rows > 0) {


        echo ' <div class="container my-5"><div class="row">';
        echo '<h1 class="text-center text-dark">' . $teamName . '</h1>';
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="card m-5 col-4 shadow  bg-light" style="width: 18rem;">
                <img src="' . $row['img'] . '" class="card-img-top" alt="' . $row['name'] . '">
                <div class="card-body">
                    <p class="card-text text-center">
                        <span class="text-primary">' . $row['name'] . '</span> <br>
                        <span class="text-danger">' . $row['squadeCategory'] . '</span>
                    </p>
                </div>
            </div>';
        }
        echo '</div></div>';


    } else {
        echo "0 results";
    }

    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>