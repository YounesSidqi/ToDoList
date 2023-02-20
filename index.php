<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/eb2cfeef2f.js" crossorigin="anonymous"></script>
    <title>To Do List</title>
</head>
<body class="bg-secondary">

<form action="insert.php" method="POST">
<div class="container">
    <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-6">
        <h3 class="text-center text-primary font-monospace">TODO LIST</h3>
    <div class="col-8">
    <input type="text" name="list" class="form-control">
    </div>
<div class="col-2">
    <button class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i></button>
</div>
</div> 
</div>
</form>

<!--GetData-->

<?php
include "config.php";
$rawData= mysqli_query($con, "select * from tbltodo")

?>

<div class="container">
    <div class="col-8 bg-white m-auto mt-3">
<table class="table">
    <tbody class="fs-3 shadow">
        <?php
        while($row = mysqli_fetch_array($rawData)){
        ?>
        <tr>
            
            <td><?php echo $row['list'] ?></td>
            <td style="width: 10%"> <a href="update.php? ID= <?php echo $row['Id'] ?>" class="btn btn-outline-success"><i class="fa-regular fa-pen-to-square"></i></a></td>
            <td style="width: 10%"> <a href="delete.php? ID= <?php echo $row['Id'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-circle-minus"></i></a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
    
</body>
</html>