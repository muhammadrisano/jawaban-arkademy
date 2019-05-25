<?php

$conn = mysqli_connect("localhost", "root", "", "arkademy");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $queryskill = "SELECT * FROM skills WHERE user_id = $row[id]";
        $skil = mysqli_query($conn, $queryskill);
        $jmlskil = mysqli_num_rows($skil);

        $row['jumlah_skill'] = $jmlskil;
        $rows[] = $row;
    }

    return $rows;
}
function query2($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {

        $rows[] = $row;
    }

    return $rows;
}
function tambah_user($data)
{
    global $conn;
    $name = $data['name'];

    $query = "INSERT INTO users VALUES ('','$name')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_skill($data)
{

    global $conn;
    $name = $data['nameskill'];
    $user_id = $data['user_id'];

    $query = "INSERT INTO skills VALUES ('','$name',' $user_id')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
