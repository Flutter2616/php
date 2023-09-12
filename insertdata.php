<?php

    include("connection.php");

    if(isset($_POST['insert']))
    {
        $name=$_POST['name'];
        $price=$_POST['price'];
        $desc=$_POST['desc'];
        $image=$_POST['image'];

        $query ="INSERT INTO `product` (`name`,`price`,`pdesc`,`image`) values ('$name',$price,'$desc','$image')";
        $result = mysqli_query($status,$query);

        if($result)
        {
        echo "success";
        }
        else{
        echo 'failed';
        }
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div style="padding: 20px;">
        <form method="post">
        <div class="mb-3" style="padding: 10px;">
            <input type="text" placeholder="product name" class="form-control" id="productname" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" style="padding: 10px;">
                <input type="number" placeholder="product price" name="price" class="form-control" id="price">
        </div>
        <div class="mb-3 form-check" style="padding: 10px;">
                <input type="text" placeholder="product description" name="desc" class="form-control" id="desc">
        </div >
        <div class="mb-3 form-check" style="padding: 10px;">
                <input type="text" placeholder="product image" name="image" class="form-control" id="image">
        </div>
        <div class="container text-center" class="mb-3 form-check" style="padding: 10px;">
            <button type="submit" name="insert" class="btn btn-primary">Insert</button>           
        </div>
        </form>
    </div>
    <!-- <form method="post">
    <input type="text" placeholder="product name" name="name">
    </br> </br>
    <input type="number" placeholder="product price" name="price">
    </br></br>
    <input type="text" placeholder="product description" name="desc">
    </br></br>
    <input type="text" placeholder="product image" name="image">
    </br></br>
    <input type="submit" name="insert">
    </form> -->
</body>
</html>