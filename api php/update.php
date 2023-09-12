<?php

    include('../connection.php');
    @$id=$_POST['id'];
    @$name=$_POST['name'];
    @$price=$_POST['price'];
    @$image=$_POST['image'];
    @$desc=$_POST['desc'];

    if($id!=null&&$name!=null&&$price!=null&&$image!=null&&$desc!=null)
    {
        $query="UPDATE `product` set `name`='$name',`price`='$price',`pdesc`='$desc',`image`='$image' WHERE `id`='$id'";
        $response=mysqli_query($status,$query);
        if($response)
        {
            $reply=array('status'=>'OK','msg'=>'Data Update successfully');
            http_response_code(200);
        }
        else{
            $reply=array('status'=>'Failed','msg'=>'Data not update');
            http_response_code(400);
        }

    }
    else
    {
        $reply=array('status'=>'Failed','msg'=>'Data missing');
        http_response_code(400);
    }

    $json=json_encode($reply,JSON_PRETTY_PRINT);
    echo $json;
?>