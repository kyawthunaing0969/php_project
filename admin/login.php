<?php
 include"../connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<style>
    a:link {
        text-decoration: none;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-info mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><b> Online Quizz System</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" href="../home.php"><i class="fa-solid fa-house-user mx-2 "></i><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php"><i class="fa-solid fa-people-group mx-2"></i><b>About us</b></a>
          </li>
        </ul>
        
        <i class="fa-solid fa-lock"></i>
        <a href="login.php" class="text-black mx-2"><b>Admin</b></a>
        <a href="../index1.php" class="text-black mx-2"><i class="fa-solid fa-right-from-bracket mx-2"></i><b>Log Out</b></a>
      </div>
    </div>
  </nav>
        <!-- nav -->
        <nav class="navbar navbar-expand-lg mt-2 ">
        <div class="container-fluid d-flex justify-content-center align-item">
            <a class="navbar-brand" href="#"><b>ADMIN LOGIN</b></a>
        </div>
    </nav>
    <!--/nav -->
    <form method="post">
        <div class="container mt-4">
            <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required >
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="d-grid gap-2 ">
                    <button type="submit" name="submit" class="btn btn-primary text-align-center">Login</button>
                </div>
                <div class="alert alert-danger mt-3" id="fail" role="alert" style="display: none">
                    <strong>Invalid!</strong> AdminName or Password
                </div>
            </div>
            <div class="col">

            </div> 
            </div>  
        </div>
    </form>
    <?php
        if(isset($_POST["submit"])){

            $count = 0;
            $sql = mysqli_query($con, " SELECT * FROM adminLogin WHERE name = '$_POST[name]' && password='$_POST[password]'");
            $count = mysqli_num_rows($sql);

            if($count==0){
                ?>
            <script type="text/javascript">
                document.getElementById("fail").style.display = "block";
            </script>
                <?php
            }else{
                ?>
            <script type="text/javascript">
                window.location= "add.php";
            </script>
                <?php
            }
        
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>