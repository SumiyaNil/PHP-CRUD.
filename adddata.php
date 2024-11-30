<?php
require_once "conn.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $code =$_POST['code'];
    if($name != "" && $code !="")
    {
        $sql = "INSERT INTO courses (`name`,`code`) VALUE('$name','$code')";
        if(mysqli_query($conn,$sql))
        {
            header("location: index.php");
        }
        else{
            echo "Something went wrong.".mysqli_error($conn);
        }
    }
    else{
        echo "Name and code cannot be empty.".mysqli_error($conn);
    }
}

?>