<?php
 include_once "connection.php";
//  var_dump($_POST);

function myfunction($v1,$v2)
{
if ($v1===$v2)
  {
  return "same";
  }
return "different";
}

 $title = $_POST["title"];

  $res1 = mysqli_query($con, "select count(title) as count, answer from question where title = '$title'");
  while ($row = mysqli_fetch_array($res1)) {
    $total = $row["count"];
    $answer = $row["answer"];
       
        
  }

?>
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
            <h1>Show Results</h1>
            </div>
        
            <table class="table align-middle mb-4">
                <thead>
                    <tr>
                        <th scope="col">quiz title</th>
                        <th scope="col">total question</th>
                        <th scope="col">correct answer</th>
                        <th scope="col">wrong answer</th>
                        <th scope="col">quiz time</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td><?php echo $title;?></td>
                        <td><?php echo $total;?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>