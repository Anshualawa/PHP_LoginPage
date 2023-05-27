<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome -
        <?php echo $_SESSION['username'] ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php require '../Components/_nav.php'; ?>

    <?php
    include '../Components/mydb.php';

    $sql = "SELECT * FROM PlayerList WHERE TeamName='MI'";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if ($result->num_rows > 0) {


        echo ' <div class="container my-5"><div class="row">';
        echo '<h1>Kolkata Knight Riders</h1>';
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