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
<style>
     body{
       width: 100%;
       background: url(images/book.png) ;
       background-position: center center;
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
   }
    
    a:link {
        text-decoration: none;
    }
</style>

<body>
    <!-- nav -->
   
    <nav class="navbar navbar-expand-lg mb-5 mt-5">
        <div class="container-fluid ">
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                <!-- <span>20:00</span> -->
                <span>
                
                </span>
            </div>
        </div>
    </nav>
    <!--/nav -->
    <form method="post">
        <div class="container mt-5">
            <div class="row">
                <div class="col">

                </div>
                <div class="col text-white">
                <center> <h5 style="font-family: Noto Sans;">Login to </h5><h4 style="font-family: Noto Sans;">Online Quiz System</h4></center><br>
                    <div class="mb-5">
                        <!-- <label>Name</label> -->
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                    </div>
                    <div class="mb-5">
                        <!-- <label>Password</label> -->
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div>
                    <div class="d-grid gap-2 ">
                        <button type="submit" name="submit" class="btn btn-primary text-align-center">Login</button>
                    </div>
                    <!-- <div class="d-grid gap-2 mt-3">
                        <a href="register.php" class="btn btn-primary">Register Now</a>
                    </div> -->
                    <div class="form-group text-center mt-4">
					 <span class="text-white">Don't have an account?</span> <a href="register.php" class="text-danger"><strong>Register</strong></a> Here..
					</div>
                    <div class="alert alert-danger mt-3" id="fail" role="alert" style="display: none">
                        <strong>Does Not Match</strong> Invalid Name or Password
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST["submit"])) {

        $count = 0;
        $sql = mysqli_query($con, " SELECT * FROM register WHERE name = '$_POST[name]' && '$_POST[password]'");
        $count = mysqli_num_rows($sql);

        if ($count == 0) {
    ?>
            <script type="text/javascript">
                document.getElementById("fail").style.display = "block";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                window.location = "index1.php";
            </script>
    <?php
        }
    }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>