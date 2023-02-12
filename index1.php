<?php 
     include "connection.php";
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<style>
   a:link {text-decoration:none;}
</style>
<body>
  <nav class="navbar navbar-expand-lg bg-info mb-2">
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
            <a class="nav-link active" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active">Disabled</a>
          </li>
        </ul>
        <a href="http://" class="text-black">Log Out</a>
      </div>
    </div>
  </nav>
  <main>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
          $res = mysqli_query($con, " select * from addexam where image = image && title = title");
          while ($row = mysqli_fetch_array($res)) {
            $image = $row["image"];
            $title = $row["title"];
            
            echo " <div class='col'>
            <div class='card shadow-sm'>
              <img src='images/$image'>
              <div class='card-body'>
                <div class='d-flex justify-content-between align-items-center'>
                  <div class='btn-group'>
                    <a href='index.php?title=$row[title]' class='btn btn-sm btn-outline-secondary'>$title</a>
                  </div>
                  <small class='text-muted'>9 mins</small>
                </div>
              </div>
            </div>
          </div>";
          }
          ?>
         
        </div>
      </div>
    </div>
  </main>
</body>

</html>