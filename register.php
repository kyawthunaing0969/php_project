<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login</title>

</head>

<body>
        <!-- nav -->
        <nav class="navbar navbar-expand-lg bg-info ">
        <div class="container-fluid d-flex justify-content-center align-item">
            <a class="navbar-brand" href="#">Quize</a>
        </div>
    </nav>
    <!--/nav -->
    <form method="post">
        <div class="container mt-5">
            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Confrim Password</label>
                        <input type="password" name="confirm" class="form-control">
                    </div>
                    <div class="d-grid gap-2 ">
                        <button type="submit" name="submit" class="btn btn-primary text-align-center">Register</button>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                      <a href="login.php" class="btn btn-primary">Login Now</a>
                    </div>
                    <div class="alert alert-success mt-3" id="success" role="alert" style="display: none">
                       <strong>Success!</strong> Success Registration successfuly.
                    </div>
                    <div class="alert alert-danger mt-3" id="fail" role="alert" style="display: none">
                    <strong>Already Exist!</strong> This Username is Already Exist
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
       
        $count = 0;
        $sql = mysqli_query($con, " SELECT * FROM register WHERE name = '$_POST[name]'") or die(mysqli_error($con));
        $count = mysqli_num_rows($sql);

        if($count>0){
            ?>
            <script type="text/javascript">
                document.getElementById("success").style.display= "none";
                document.getElementById("fail").style.display= "block";
    
            </script>
        <?php
              
            } else{
                mysqli_query($con," INSERT INTO register VALUES(NULL,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[confirm]')");
        ?>
            <script type="text/javascript">
                document.getElementById("success").style.display= "block";
                document.getElementById("fail").style.display= "none";
            </script>
        <?php
        }
    }

?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>