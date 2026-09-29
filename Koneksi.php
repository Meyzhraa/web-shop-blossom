<?php 

$con = mysqli_connect("localhost","root","","db_imdk")or die(mysqli_error($con));


function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function masuk($data){

    global $con;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($con, $data["password"]);

    mysqli_query($con, "INSERT INTO user VALUES('', '$username','$password')");
    return mysqli_affected_rows($con);
}
