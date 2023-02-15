<?php
 include_once "connection.php";
//  $title = $_POST["title"];

//  $res1 = mysqli_query($con, "select count(title) as count, answer,opt1 from question where title = '$title'");
//   while ($row = mysqli_fetch_array($res1)) {
//     $total = $row["count"];
//    $answer = $row["answer"];
//    $opt1 = $row["opt1"];

//   }

//   $res1 = mysqli_query($con, "select time from addexam where title = '$title'");
//   while ($row = mysqli_fetch_array($res1)) {
//     $time = $row["time"];
//   }

// ?>
 <?php
//  include_once "connection.php";

// $userput=$_POST['opt'];
// $db="";
// $correct=0;
// $wrong=0;

//  $title =$_POST['title'];

//   $res1 = mysqli_query($con, "select opt2,answer from question where title = '$title'");
//   while ($row = mysqli_fetch_array($res1)) {
//     $answer = $row["answer"];
  
//     $arr=array($answer);
//     foreach($arr as $key=>$value)
//     {
//         $db=$value;
    
//        for($i=0; $i<count($userput);$i++) 
//        {
//         if($db==$userput[$i])
//         {
//             $fruitArry=explode(",",$userput[$i]);
//             $correct += count($fruitArry);

//        }
//     }
   
//     }   
    
//   }
// ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>time out</title>
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
 <nav class="navbar navbar-expand-lg bg-info mb-2 " id="nav">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#"><b> Online Quizz System</b></a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" href="index1.php"><i class="fa-solid fa-house-user mx-2 "></i><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="showRegister.php"><i class="fa-solid fa-users mx-2"></i><b>Show User</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.us"><i class="fa-solid fa-people-group mx-2"></i><b>About Us</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="showAnswer.php"><i class="fa-solid fa-clipboard mx-2"></i></i><b>Show Answer</b></a>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end">
                        <button type="submit" class='btn btn-success mb-4 mt-5 ' style="width:200px;"><a href="showAnswer.php" class="text-white">Show Answer</a></button>
                    </div>
    </div>
</div>
<script src="./jquery.js"></script>
    <script>
        // $("#show").click(function(){
         $("#hide").hide();
         $("#nav").hide();
    //    });
    </script>
</body>
</html>