<?php

include 'Components/mydb.php';

$sql = "SELECT TeamName,name,squadeCategory,img FROM PlayerList";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($result->num_rows > 0) {


    echo ' <div class="container my-5"><div class="row">';
    $mi = '';
    $gt = '';
    $pbks = '';
    while ($row = $result->fetch_assoc()) {
        $team = '
            <div class="card m-5 col-4 shadow  bg-light" style="width: 18rem;">
                <img src="' . $row['img'] . '" class="card-img-top" alt="' . $row['name'] . '">
                <div class="card-body">
                    <p class="card-text text-center">
                        <span class="text-primary">' . $row['name'] . '</span> <br>
                        <span class="text-danger">' . $row['squadeCategory'] . '</span>
                    </p>
                </div>
            </div>';

        if ($row['TeamName'] == 'MI') {
            $mi .= $team;
        } elseif ($row['TeamName'] == 'GT') {
            $gt .= $team;
        } elseif ($row['TeamName'] == 'PBKS') {
            $pbks .= $team;
        }
    }
    echo '<h1 class="text-center text-dark"> Gujarat Titans</h1>';
    echo $gt;
    echo '<h1 class="text-center text-dark"> Mumbai Indians</h1>';
    echo $mi;
    echo '<h1 class="text-center text-dark"> Punjab Kings</h1>';
    echo $pbks;
    echo '</div></div>';


} else {
    echo "0 results";
}

?>