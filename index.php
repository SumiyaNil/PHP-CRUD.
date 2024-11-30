<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .a{
            align-items: center;
            margin-top: 50px;
           
        }
        
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <title> Students Course Details</title>
</head>
<body>
    <div class="container">
    <form action="adddata.php" method="post">
        <div class="row">
            <div class="form-group col-lg-4">
                <label for="">Course Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label for="">Course Code</label>
                <input type="text" name="code" class="form-control">
            </div>
            <div class="form-group col-lg-2">
                <input type="submit" name="submit" class="btn btn-primary mt-4 md-3" value="submit">
            </div>
        </div>
    </form>
    </div>



<div class="a">
<section style="text-align:center;">
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course Code</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                 require_once "conn.php";
                 $sql_query = "SELECT * FROM courses";
                 if($result = $conn -> query($sql_query))
                 {
                    while($row = $result ->fetch_assoc()){
                        $Id = $row['id'];
                        $name =$row['name'];
                        $code = $row['code'];

                        ?>
                        <tr class="trow">
                            <td><?php echo $Id; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $code; ?></td>
                            <td><a href="updatedata.php?id=<?php echo $Id;?>" class="btn btn-primary">Edit</a>
                                <a href="deletedata.php?id=<?php echo $Id;?>" class="btn btn-danger">Delete</a>                       
                        </td>
                        </tr>
                        <?php
                    }
                 }
                ?>
            </tbody>
        </table>
    </div>
    </section>
    </div>
</body>
</html>