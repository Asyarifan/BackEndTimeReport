<?php

require "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $response = array();
    $email = $_POST['email'];
    //$NIK = $_POST['NIK'];
    $password = $_POST['password'];
    
    $cek = "SELECT * FROM user WHERE email='$email' and password='$password'";
    $result = mysqli_fetch_array(mysqli_query($con, $cek));

    if(isset($result)){
        $response['value'] = 1;
        $response['message'] = 'Login Berhasil';
        echo json_encode($response);

    } else{
            $response['value'] = 0;
            $response['message'] = "Login gagal";
            echo json_encode($response);
        }
    }

?>