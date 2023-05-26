<?php

include 'mydb.php';

$sql = "SELECT id, Full_Name, Email_ID, Contact_Number FROM users";
// $result = mysqli_query($conn, $sql);
// $num = mysqli_num_rows($result);


// if ($result->num_rows > 0) {
//     // output data of each row
//     echo '<table border="1px">';
//     echo '<thead><tr><th>ID</th><th>UserID</th></tr>';
//     echo '<tbody>';
//     while ($row = $result->fetch_assoc()) {
//         echo '<tr>'
//             . '<td style="text-align: center;">' . $row['id'] . '</td>'
//             . '<td>' . $row["id"] . '</td>'
//             . '<td>' . $row["username"] . '</td>'
//             . '</tr>';
//     }
//     echo '</tbody></table>';
// } else {
//     echo "0 results";
// }




?>




<div class="container px-5">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">user</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
            </tr>
        </tbody>
    </table>


</div>