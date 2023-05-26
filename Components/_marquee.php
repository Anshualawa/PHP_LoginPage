<?php

include 'mydb.php';

$sql = "SELECT TeamCode,TeamName,TeamLogo FROM Cricket";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($result->num_rows > 0) {


    echo '<marquee behavior="" direction="" class="fixed-bottom">';

    while ($row = $result->fetch_assoc()) {

        echo '<img src="' . $row['TeamLogo'] . '" height="30vh" alt="' . $row['TeamCode'] . '"> ';
        echo '  <span class="text-primary">' . $row['TeamName'] . '</span><span class="text-warning"> IPL 2023 </span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ';
    }
    echo '</marquee>';
} else {
    echo "0 results";
}

?>