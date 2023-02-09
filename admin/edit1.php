
<?php
 include "../connection.php";
 $id = $_GET["id"];
 echo $id;
 $res = mysqli_query($con, "select * from question where id = $id");
 while($row = mysqli_fetch_array($res)){
    $Title = $row["title"];
    $question = $row["question"];
    $opt1 = $row["opt1"];
    $opt2 = $row["opt2"];
    $opt3 = $row["opt3"];
    $opt4 = $row["opt4"];
    $answer = $row["answer"];
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-info" href="add.php">
                        <h5>Add Subject</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-4 text-info" href="question.php">
                        <h5>Add Question</h5>
                    </a>
                </li>
            </ul>
            <a href="home.html" class="text-black">Log Out</a>
        </div>
    </nav>
    <!--/nav -->

    <!-- head -->
    <div class="container">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Question</h1>

                </div>
                <!-- add exam -->
                <form method="post" class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Title</label>
                            <input type="Text" class="form-control" name="title" value="<?php echo $Title; ?>">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Question</label>
                            <input type="Text" class="form-control" name="question" value="<?php echo $question; ?>"  style="height: 60px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">option-a</label>
                            <input type="Text" class="form-control" name="option_a" value="<?php echo $opt1; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">option-b</label>
                            <input type="Text" class="form-control" name="option_b" value="<?php echo $opt2; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">option-c</label>
                            <input type="Text" class="form-control" name="option_c" value="<?php echo $opt3; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">option-d</label>
                            <input type="Text" class="form-control" name="option_d" value="<?php echo $opt4; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Answer</label>
                            <input type="Text" class="form-control" name="answer" value="<?php echo $answer; ?>">
                        </div>

                        <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
                    </div>

                </form>

                <!-- /add exam -->
                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="1076" height="454" style="display: block; width: 1076px; height: 454px;"></canvas>
            </main>
            <!-- /head -->
        </div>
    </div>

    <?php
 if(isset($_POST["submit2"])){
    mysqli_query($con, "update question set title = '$_POST[title]', question = '$_POST[question]', opt1='$_POST[option_a]', opt2 = '$_POST[option_b]', opt3 = '$_POST[option_c]', opt4 = '$_POST[option_d]', answer = '$_POST[answer]' where id = $id") or die(mysqli_error($con));
    ?>
    <script>
        window.location = "question.php";
    </script>
     <?php
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>