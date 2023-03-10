<?php
include "connection.php";

$title = $_GET['title'];
session_start();
$_SESSION['title'] = $title;
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question pages</title>
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
            <a class="nav-link active" href="about.php"><i class="fa-solid fa-people-group mx-2"></i><b>About Us</b></a>
          </li>
        </ul>
        
        <i class="fa-solid fa-lock"></i>
        <a href="./admin/login.php" class="text-black mx-2"><b>Admin</b></a>
        <a href="home.php" class="text-black mx-2"><i class="fa-solid fa-right-from-bracket mx-2"></i><b>Log Out</b></a>
      </div>
    </div>
  </nav>
<nav>
<span id='show'></span>

</nav>

    <div class=" container">
        <div class="row bg-light">
            <form action="result.php" method="post">
                <div class="col mt-4 mb-4" id="hide">
                    <div class=' d-flex justify-content-center mx-4 mt-2 mb-5'>
                        <span><strong>
                                <h1>CHOOSE YOUR QUESTIONS AND ANSWER</h1>
                            </strong></span>
                    </div>
                    <input type='text' name='title' value='<?php echo $title ?>' hidden>
                    <!-- <input type='text' name='answer' value='<?php echo $anser ?>' hidden> -->
                    <?php
                    $co = 0;
                    $res = mysqli_query($con, " select question,opt1,opt2,opt3,opt4,answer from question where title = '$title' ");
                    $arr = array($res);
                    while ($row = mysqli_fetch_array($res)) {

                        for($i=1; $i<=count($arr); $i++){
                            $co+=1;
                        }
                        $question = $row["question"];
                        $option_a = $row["opt1"];
                        $option_b = $row["opt2"];
                        $option_c = $row["opt3"];
                        $option_d = $row["opt4"];
                        $answer = $row["answer"];
                        echo " 
                    
                    <div class=' d-flex justify-content-start mx-4 mt-4'>
                        <span><strong>$co</strong></span>.
                        <span><strong>$question</strong></span>
                    </div>
                    <div class='form-check form-check-inline mx-5 mt-3'>
                        <input class='form-check-input' type='checkbox' name='opt[]' id='inlineRadio1' value='$option_a'>
                        <label class='form-check-label' for='inlineRadio1'>$option_a</label>
                    </div>
                    <div class='form-check form-check-inline mx-5'>
                        <input class='form-check-input' type='checkbox' name='opt[]' id='inlineRadio2' value='$option_b'>
                        <label class='form-check-label' for='inlineRadio2'>$option_b</label>
                    </div>
                    <div class='form-check form-check-inline mx-5'>
                        <input class='form-check-input' type='checkbox' name='opt[]' id='inlineRadio1' value='$option_c'>
                        <label class='form-check-label' for='inlineRadio1'>$option_c</label>
                    </div>
                    <div class='form-check form-check-inline mx-5 mb-5'>
                        <input class='form-check-input' type='checkbox' name='opt[]' id='inlineRadio2' value='$option_d'>
                        <label class='form-check-label' for='inlineRadio2'>$option_d</label>
                    </div>
                    <div class='form-check form-check-inline mx-5 mb-5'>
                        <input class='form-check-input' type='checkbox' name='answer' id='inlineRadio2' value='$answer' hidden>
                        <label class='form-check-label' for='inlineRadio2' hidden >$answer</label>
                    </div>
                    ";
                    }


                    ?>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class='btn btn-success mb-4 mt-5 ' style="width:200px;">Show Result</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
    <script src="./jquery.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#show").load("timer.php");
            }, 1000)

            // var showtext = $("#show").text();
            // console.log(showtext);

        });
    </script>
</body>

</html>