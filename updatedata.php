<!DOCTYPE html>
<html lang="en">
<?php 
require_once "conn.php";
if(isset($_POST["name"]) && isset($_POST["code"]))
{
    $name = $_POST['name'];
    $code = $_POST['code'];
    $sql = "UPDATE courses SET `name` = '$name', `code` = '$code' WHERE id = ".$_GET["id"];
    if(mysqli_query($conn,$sql)){
    header("location: index.php");
}
else{
    echo "Something went wrong. Please try again later.";
}
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Update page</title>
</head>
<body>
<div class="container">
    <?php
    require_once "conn.php";
    $sql_query = "SELECT * FROM courses WHERE id=".$_GET["id"];
    if($result=$conn->query($sql_query)){
        while($row = $result->fetch_assoc()){
            $Id = $row['id'];
            $name = $row['name'];
            $code = $row['code'];
            ?>

            <form action="updatedata.php?id=<?php echo $Id;?>" method="post"> 
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="">
                            Course name
                        </label>
                        <input type="text" name="name" id="name" value="<?php echo $name;?>" class="form-control" required>
                    </div>

                    <div class="form-group col-lg-3">
                        <label for="">Course Code</label>
                        <input type="text" name="code" id="code" value="<?php echo $code;?>" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-2">
                        <input type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
            <?php
        }
    }
    ?>
</div>    



</body>
</html>