<?php
include("../connection.php");
$query="SELECT * FROM `product`";
$response=mysqli_query($status,$query);
$data=array();

while($row=mysqli_fetch_assoc($response))
{
    $data[]=$row;
}

$json=json_encode($data,JSON_PRETTY_PRINT);

echo $json;


?>