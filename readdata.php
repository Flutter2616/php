<?php

    include("connection.php");
    $query="SELECT * From `product`";
    $response=mysqli_query($status,$query);

    if(isset($_GET['delete']))
    {
        $id=$_GET['delete'];
        $deletequery="DELETE FROM `product` WHERE `id`='$id'";
        mysqli_query($status,$deletequery);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Delete product</th>
            <th scope="col">Update product</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_assoc($response)){ ?>
                    <tr>
                        <th scope="row"><?php echo $row['id'];?></th>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['pdesc'];?></td>
                        <td> <a href="readdata.php?delete=<?php echo $row['id']?>">Delete</a> </td>
                        <td> <a href="updatedata.php?update=<?php echo $row['id']?>">Update</a> </td>
                    </tr>
            <?php } ?>
        </tbody>
        </table>
</body>
</html>