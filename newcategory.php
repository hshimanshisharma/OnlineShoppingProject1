<?php
session_start();
if (!isset($_SESSION['ADMINMAIL'])) {
    header("Location:admin_login.php");
}
include ("connection.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php");?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<?php include ("adminheader.php");?>
<div class="container">
    <div class="row">
        <h1 class="text-center text-success">View category</h1>
        <a href="category.php" class="btn btn-success btn-sm m-4 text-light text-right" >Add New Category</a>
        <div class="col-12 col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>srno</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                $select= "select * from categorytable";
                $res=mysqli_query($conn,$select);
                $num=1;
                while($row = mysqli_fetch_array($res)){
                    echo"<tr>";
                    echo "<td>".$num."</td>";
                    echo "<td>".$row['categoryname']."</td>";
                    echo "<td>".$row['description']."</td>";
                    echo "<td><a href='editcategory.php?categoryid=".$row['categoryid']."'><i class='fa fa-pen'></i></a></td>";
                    echo "<td><a href='deletecategory.php?categoryid=".$row['categoryid']."'><i class='fa fa-trash-alt text-danger'></i></a></td>";
                    echo "</tr>";
                    $num++;
                }
                ?>
            </table>
        </div>
    </div>
</div>z
    <?php include ("footer.php");?>
</body>
</html>
