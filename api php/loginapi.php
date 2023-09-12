<?php

    include("../connection.php");

    $email=$_POST['email'];
    $password=$_POST['password'];


    if($email!=null&&$password!=null)
    {
        $query="SELECT * FROM `user` WHERE `email`='$email'";
        $response=mysqli_query($status,$query);
        if(mysqli_num_rows($response)>0)
        {
            $row=mysqli_fetch_assoc($response);
            $status=password_verify($password,$row['password']);
            if($status)
            {
                $msg=array("status"=>"OK","msg"=>"Login successfully");
                http_response_code(200);
            }
            else{
                $msg=array("status"=>"Failed","msg"=>"password invalid");
                http_response_code(400);
            }
        }
        else{
            $msg=array("status"=>"Failed","msg"=>"Invalid email or password");
            http_response_code(400);
        }
    }
    else{
        $msg=array("status"=>"Failed","msg"=>"PLease enter your email or password");
        http_response_code(400);
    }

    $json=json_encode($msg,JSON_PRETTY_PRINT);
    echo $json;

?>