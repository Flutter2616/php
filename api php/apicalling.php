<?php
    include("../connection.php");
    $data=file_get_contents("https://fakestoreapi.com/products");
    $json=json_decode($data);  
    
    // $name=$json[i]->title;
    // $price=$json[i]->price;
    // $image=$json[i]->image;
    // $desc=$json[i]->description;

    // echo $name;

    for($i=0;$i<mysqli_num_rows($json);$i++)
    {
        
        $name=$json[$i]->title;
        $price=$json[$i]->price;
        $image=$json[$i]->image;
        $desc=$json[$i]->description;
        $query="INSERT INTO `product` (`name`,`price`,`image`,`pdesc`)VALUES('$name','$price','$image','$desc')";
        $response=mysqli_query($status,$query);
    }

    if($response)
        {
            echo 'success';
        }
        else{
            echo 'Failed';
        }

?>