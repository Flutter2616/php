<?php

    include("connection.php");
    if(isset($_GET['update']))
    {
        $id=$_GET['update'];
        $query ="SELECT * FROM `product` WHERE `id`='$id'";
        $response = mysqli_query($status,$query);
        // if(mysqli_num_rows($response)>0)
        // {
            $row=mysqli_fetch_assoc($response);
            // print_r($row);
        // }
    }

    if(isset($_POST['update']))
    {
        $id=$_GET['update'];
        $name=$_POST['name'];
        $price=$_POST['price'];
        $image=$_POST['image'];
        $desc=$_POST['desc'];
        $updatequery="UPDATE `product` SET `name`='$name',`price`='$price',`pdesc`='$desc',`image`='$image' WHERE `id`='$id'";
        mysqli_query($status,$updatequery);
        header('location:readdata.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div style="padding: 20px;">
        <form method="post">
        <div class="mb-3" style="padding: 10px;">
            <input type="text" value="<?php echo $row['name'] ?>" placeholder="product name" class="form-control" id="productname" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" style="padding: 10px;">
                <input type="number"value="<?php echo $row['price'] ?>" placeholder="product price" name="price" class="form-control" id="price">
        </div>
        <div class="mb-3 form-check" style="padding: 10px;">
                <input type="text" value="<?php echo $row['pdesc'] ?>" placeholder="product description" name="desc" class="form-control" id="desc">
        </div >
        <div class="mb-3 form-check" style="padding: 10px;">
                <input type="text" value="<?php echo $row['image'] ?>" placeholder="product image" name="image" class="form-control" id="image">
        </div>
        <div class="container text-center" class="mb-3 form-check" style="padding: 10px;">
            <button type="submit" name="update" class="btn btn-primary">Update</button>           
        </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>