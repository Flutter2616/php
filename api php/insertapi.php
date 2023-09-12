<?php
    include("../connection.php");

    @$name=$_POST['name'];
    @$price=$_POST['price'];
    @$image=$_POST['image'];
    @$desc=$_POST['desc'];


    // echo $name;
    // echo $price;
    // echo $image;
    // echo $desc;
    $query="INSERT INTO `product` (`name`,`price`,`image`,`pdesc`)VALUES('$name','$price','$image','$desc')";

    $result=mysqli_query($status,$query);

    if($result)
    {
        $jsondata=array("status"=>"ok","msg"=>"success");
    }
    else
    {
        $jsondata=array("status"=>"Failed","msg"=>"unsuccess");
    }

    $json=json_encode($jsondata,JSON_PRETTY_PRINT);

    echo $json;


?>