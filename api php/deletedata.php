<?php

include("../connection.php");

@$id=$_POST['id'];

$query="DELETE FROM `product` WHERE `id`='$id'";

$response=mysqli_query($status,$query);

if($response)
{
    $msg=array("status"=>"OK","msg"=>"Successfully delete data");
}
else{
    $msg=array("status"=>"Failed","msg"=>"Unccessfully delete data");
}

$json=json_encode($msg,JSON_PRETTY_PRINT);

echo $json;

?>