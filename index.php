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
    <nav class="navbar navbar-expand-lg bg-light mb-5 mx-3">
        <div class="container-fluid ">
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                <!-- <span>20:00</span> -->
                <span>
                <?php
                $title = $_GET["title"];
                $res = mysqli_query($con, " select time from addexam where title = '$title'");
                while ($row = mysqli_fetch_array($res)) {
                    $time = $row["time"];
                }
                echo "$time"
                ?>
                </span>
            </div>
        </div>
    </nav>
    <div class=" container">
        <div class="row bg-light">
            <div class="col mt-4 mb-4">
                <?php
                
                $title = $_GET["title"];
                $res = mysqli_query($con, " select question,opt1,opt2,opt3,opt4 from question where title = '$title' ");
                while ($row = mysqli_fetch_array($res)) {
                    for ($i=1; $i<=10; $i++) {
                        echo $i;
                     }
                    $question = $row["question"];
                    $option_a = $row["opt1"];
                    $option_b = $row["opt2"];
                    $option_c = $row["opt3"];
                    $option_d = $row["opt4"];
                    echo " <div class=' d-flex justify-content-start mx-4'>
                        <span><strong>$i$question</strong></span>
                    </div>
                    <div class='form-check form-check-inline mx-5 mt-3'>
                        <input class='form-check-input' type='checkbox' name='inlineRadioOptions' id='inlineRadio1' value='option1'>
                        <label class='form-check-label' for='inlineRadio1'>$option_a</label>
                    </div>
                    <div class='form-check form-check-inline mx-5'>
                        <input class='form-check-input' type='checkbox' name='inlineRadioOptions' id='inlineRadio2' value='option2'>
                        <label class='form-check-label' for='inlineRadio2'>$option_b</label>
                    </div>
                    <div class='form-check form-check-inline mx-5'>
                        <input class='form-check-input' type='checkbox' name='inlineRadioOptions' id='inlineRadio1' value='option1'>
                        <label class='form-check-label' for='inlineRadio1'>$option_c</label>
                    </div>
                    <div class='form-check form-check-inline mx-5 mb-5'>
                        <input class='form-check-input' type='checkbox' name='inlineRadioOptions' id='inlineRadio2' value='option2'>
                        <label class='form-check-label' for='inlineRadio2'>$option_d</label>
                    </div>";
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>