<?php

require 'dbcon.php';

if(isset($_POST['save_apartment']))
{
    $apartment = mysqli_real_escape_string($con, $_POST['apartment']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $pax = mysqli_real_escape_string($con, $_POST['pax']);
    $guest_name = mysqli_real_escape_string($con, $_POST['guest_name']);

    if($apartment == NULL || $location == NULL || $pax == NULL || $guest_name == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO apartment (apartment,location,pax,guest) VALUES ('$apartment','$location','$pax','$guest_name')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Successfull'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_apartment']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $apartment = mysqli_real_escape_string($con, $_POST['apartment']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $pax = mysqli_real_escape_string($con, $_POST['pax']);
    $guest_name = mysqli_real_escape_string($con, $_POST['guest_name']);

    if($apartment == NULL || $location == NULL || $pax == NULL || $guest_name == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE apartment SET apartment='$apartment', location='$location', pax='$pax', guest='$guest_name' 
                WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['id']))
{
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $query = "SELECT * FROM apartment WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $data = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Fetch Successfully by id',
            'data' => $data
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_apartment']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $query = "DELETE FROM apartment WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>