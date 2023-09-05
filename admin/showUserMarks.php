<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<style>
    a:link {
        text-decoration: none;
    }
</style>

<body>

 <nav class="navbar navbar-expand-lg bg-info mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./admin/login.php">admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./login.php">login</a>
                    </li>
                </ul>
                <a href="http://" class="text-black">Log Out</a>
            </div>
        </div>
    </nav>
<div class=" container">
    <div class="row bg-light">
        <div class="col mt-4 mb-4">
            <div class="text-center mt-3 mb-5 text-warning">
            <h1>Show Admin</h1>
            </div>
        
           <?php 
           echo" <table class='table align-middle mb-4'>";
               echo" <thead>";
                   echo" <tr>";
                        echo"<th scope='col'>Name</th>";
                        echo"<th scope=col'>Marks</th>";
                        echo"<th scope='col'>Total Mark</th>";
                        // echo"<th scope=col'>Title</th>";
                        
                    echo"</tr>";
               echo" </thead>";
                
include ("../connection.php"); //or require
$res1 = mysqli_query($con, "select name,mark,Totalmark,title from showuser");
while ($row = mysqli_fetch_array($res1)) {
     
                echo"<tbody class='table-group-divider'>";
                   echo" <tr>";
                        echo"<td>".$row['name']."</td>";
                        echo"<td>".$row['mark']."</td>";
                        echo"<td>".$row['Totalmark']."</td>";
                        // echo"<td>".$row['title']."</td>";
                        
                    echo"</tr>";
                echo"</tbody>";
}
            echo"</table>";
            ?>
        </div>
    </div>
</div>
</form>
</body>
</html>