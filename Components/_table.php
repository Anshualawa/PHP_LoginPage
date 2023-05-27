<?php

include 'mydb.php';

$sql = "SELECT TeamCode,TeamName, Matches,Wins,Loss,Tied,Points,TeamLogo FROM Cricket";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($result->num_rows > 0) {

    echo '<div class="container px-3">
    <table class="table table-hover">
    <thead class="table-dark">
                <tr>
                <th scope="col"></th>
                <th scope="col">Team Code</th>
                <th scope="col">Team Name</th>
                <th scope="col">Matches</th>
                <th scope="col">Wins</th>
                <th scope="col">Loss</th>
                <th scope="col">Tied</th>
                <th scope="col">Points</th>
                </tr>
                </thead>
                <tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>'
            . '<td><a href="./team/_' . $row['TeamCode'] . '.php"><img src="' . $row['TeamLogo'] . '" height="30vh"></a></td>'
            . '<th>' . $row['TeamCode'] . '</th>'
            . '<td>' . $row['TeamName'] . '</td>'
            . '<td>' . $row['Matches'] . '</td>'
            . '<td>' . $row['Wins'] . '</td>'
            . '<td>' . $row['Loss'] . '</td>'
            . '<td>' . $row['Tied'] . '</td>'
            . '<td>' . $row['Points'] . '</td>'
            . '</tr>';
    }
    echo '
    </tbody>
    </table>
    </div>';

} else {
    echo "0 results";
}

?>