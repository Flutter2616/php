<?php
    include("../connection.php");

    $email=$_POST['email'];
    $password=$_POST['password'];
    $name=$_POST['name'];

    if($email!=null&&$password!=null&&$name!=null)
    {
        $dataquery="SELECT * FROM `user` WHERE `email`='$email'";
        $response=mysqli_query($status,$dataquery);
        if(mysqli_num_rows($response)>0)
        {
            $msg=array("status"=>"Failed","msg"=>"User already register");
            http_response_code(400);
        }
        else{
            $secure=password_hash($password,PASSWORD_DEFAULT);
            $query="INSERT INTO `user` (`email`,`name`,`password`)VALUES('$email','$name','$secure')";
            $res=mysqli_query($status,$query);
            if($res)
            {
                $msg=array("status"=>"OK","msg"=>"Register successfully");
                http_response_code(200);    
            }
            else{
                $msg=array("status"=>"Failed","msg"=>"Register Failed");
                http_response_code(400);
            }
        }
        
        
    }
    else
    {
        $msg=array("status"=>"Failed","msg"=>"Signup Failed");
        http_response_code(400);
    }

    $json=json_encode($msg,JSON_PRETTY_PRINT);
    echo $json;


?>