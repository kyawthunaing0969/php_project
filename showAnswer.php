 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<style>
  a:link {
    text-decoration: none;
  }
</style> 

<body>
<nav class="navbar navbar-expand-lg bg-info mb-2 ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b> Online Quizz System</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" href="index1.php"><i class="fa-solid fa-house-user mx-2 "></i><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.php"><i class="fa-solid fa-people-group mx-2"></i><b>About us</b></a>
              </li>
            </ul>

            <i class="fa-solid fa-lock"></i>
            <a href="./admin/login.php" class="text-black mx-2"><b>Admin</b></a>
             <a href="home.php" class="text-black mx-2"><i class="fa-solid fa-right-from-bracket mx-2"></i><b>Log Out</b></a>
          </div>
        </div>
      </nav>
      <div class=" container">
        <div class="row bg-light">
          <div class="col mt-4 mb-4">
            <div class="text-center mt-3 mb-5 text-warning">
              <h1>Show Answer</h1>
            </div>
  <?php
  echo "<table class='table align-middle mb-4'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th scope='col'>Question</th>";

  echo "<th scope='col'>Answer</th>";

  echo "</tr>";
  echo "</thead>";
  include_once "connection.php";
  session_start();
  $title = $_SESSION["title"];


  $res1 = mysqli_query($con, "select question,answer from question where title = '$title'");
  while ($row = mysqli_fetch_array($res1)) {

    echo "<tbody class='table'>";
    echo " <tr>";

    echo "<td>" . $row['question'] . "</td>";
    echo "<td>" . $row['answer'] . "</td>";

    echo "</tr>";


    echo " </tbody>";
  }
  echo "</table>"; 

  ?>
          
          </div>
        </div>
      </div>
  </body>

  </html> 