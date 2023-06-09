<?php

require 'mydb.php';

function error422($message)
{
    $data = [
        'status' => 422,
        'message' => $message,
    ];
    header("HTTP/1.0 422 Unprocessable Entity ");
    echo json_encode($data);
    exit();
}




function storeCustomer($costomerInput)
{

    global $conn;

    // $TeamCode = mysqli_real_escape_string($conn, $costomerInput['TeamCode']);
    // $TeamName = mysqli_real_escape_string($conn, $costomerInput['TeamName']);
    // $Wins = mysqli_real_escape_string($conn, $costomerInput['Wins']);
    // $Loss = mysqli_real_escape_string($conn, $costomerInput['Loss']);
    // $Tied = mysqli_real_escape_string($conn, $costomerInput['Tied']);
    // $Points = mysqli_real_escape_string($conn, $costomerInput['Points']);
    // $TeamLogo = mysqli_real_escape_string($conn, $costomerInput['TeamLogo']);
    // $Matches = mysqli_real_escape_string($conn, $costomerInput['Matches']);

    $TeamName = mysqli_real_escape_string($conn, $costomerInput['TeamName']);
    $name = mysqli_real_escape_string($conn, $costomerInput['name']);
    $squadeCategory = mysqli_real_escape_string($conn, $costomerInput['squadeCategory']);
    $img = mysqli_real_escape_string($conn, $costomerInput['img']);


    if (empty(trim($TeamName))) {
        return error422('Enter your Team Code ');
    } elseif (empty(trim($name))) {
        return error422('Enter your name ');
    } elseif (empty(trim($squadeCategory))) {
        return error422('Enter your squadeCategory ');
    } else {

        $query = "INSERT INTO PlayerList(TeamName,name,squadeCategory,img) VALUES ('$TeamName','$name','$squadeCategory','$img')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $data = [
                'status' => 201,
                'message' => 'Customer Created Successfully',

            ];
            header("HTTP/1.0 201 Created");
            return json_encode($data);
        } else {
            $data = [
                'status' => 500,
                'message' => 'Internal Server Error',

            ];
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }
    }
}



function getCustomerList()
{
    global $conn;

    $query = "SELECT * FROM Cricket";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {

        if (($query_run) > 0) {

            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

            $data = [
                'status' => 200,
                'message' => 'Customer List Fetched Successfully',
                'data' => $res
            ];
            header("HTTP/1.0 200 Success");
            return json_encode($data);

        } else {
            $data = [
                'status' => 404,
                'message' => 'No Customer Found',
            ];
            header("HTTP/1.0 404 No Customer Found");
            return json_encode($data);
        }

    } else {
        $data = [
            'status' => 500,
            'message' => 'Method Not Allowed',
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
}


function getCustomer($customerParams)
{
    global $conn;

    if ($customerParams['id'] == null) {
        return error422(' Enter your customer id');

    }
    $customerId = mysqli_real_escape_string($conn, $customerParams['id']);

    $query = "SELECT * FROM customers WHERE id='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {

        if (mysqli_num_rows($result) == 1) {

            $res = mysqli_fetch_assoc($result);
            $data = [
                'status' => 200,
                'message' => ' Customer Fetched Successfully',
                'data' => $res
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);

        } else {
            $data = [
                'status' => 404,
                'message' => ' No Customer Found',
            ];
            header("HTTP/1.0 404 Not Found");
            return json_encode($data);
        }
    } else {
        $data = [
            'status' => 500,
            'message' => 'Method Not Allowed',
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
}


function deleteCustomer($customerParams)
{
    global $conn;

    if (!isset($customerParams['id'])) {
        return error422('customer Id not found in URL');
    } elseif ($customerParams['id'] == null) {
        return error422('Enter the customer ID');
    }

    $customerId = mysqli_real_escape_string($conn, $customerParams['id']);
    $query = "DELETE FROM customers WHERE id='$customerId' LIMIT 1";
    $result = mysqli_query($conn, $query);


    if ($result) {
        $data = [
            'status' => 200,
            'message' => ' Customer Deleted Successfully'
        ];
        header("HTTP/1.0 200 Deleted");
        return json_encode($data);
    } else {
        $data = [
            'status' => 404,
            'message' => ' No Customer Found',
        ];
        header("HTTP/1.0 404 Not Found");
        return json_encode($data);
    }

}

function updateCustomer($costomerInput, $customerParams)
{

    global $conn;


    if (!isset($customerParams['id'])) {
        return error422('Customer id not found in URL');
    } elseif ($customerParams['id'] == null) {
        return error422('Enter customer id');

    }

    $customerId = mysqli_real_escape_string($conn, $customerParams['id']);

    $name = mysqli_real_escape_string($conn, $costomerInput['name']);
    $email = mysqli_real_escape_string($conn, $costomerInput['email']);
    $phone = mysqli_real_escape_string($conn, $costomerInput['phone']);

    if (empty(trim($name))) {
        return error422('Enter your Name ');
    } elseif (empty(trim($email))) {
        return error422('Enter your Email ');
    } elseif (empty(trim($phone))) {
        return error422('Enter your Phone ');
    } else {

        $query = "UPDATE  customers SET name='$name', email='$email', phone='$phone' WHERE id='$customerId' LIMIT 1";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $data = [
                'status' => 200,
                'message' => 'Customer Updated Successfully',

            ];
            header("HTTP/1.0 200 Success");
            return json_encode($data);
        } else {
            $data = [
                'status' => 500,
                'message' => 'Internal Server Error',

            ];
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }
    }
}

?>