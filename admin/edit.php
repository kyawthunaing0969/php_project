<?php
include "../connection.php";
$id = $_GET["id"];
echo $id;
$res = mysqli_query($con, "select * from addexam where id = $id");
while ($row = mysqli_fetch_array($res)) {
    $editfile = $row["image"];
    $Title = $row["title"];
    $Time = $row["time"];
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
<style>
    a:link {
        text-decoration: none;
    }
</style>

<body>
<nav class="navbar navbar-expand-lg bg-info ">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#"><b> Online Quizz System</b></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" href="../home.php"><i class="fa-solid fa-house-user mx-2 "></i><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="add.php"><i class="fa-solid fa-pen-to-square mx-2"></i><b>Add Subject</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="question.php"><i class="fa-solid fa-clipboard-question mx-2"></i></i><b>Add Question</b></a>
                    </li>
                </ul>

                <i class="fa-solid fa-unlock"></i>
                <a href="login.php" class="text-black mx-2"><b>Admin</b></a>
                <a href="../home.php" class="text-black mx-2"><i class="fa-solid fa-right-from-bracket mx-2"></i><b>Log Out</b></a>
            </div>
        </div>
    </nav>
    <!-- dashboard -->
    <div class="container">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Exam</h1>

                </div>
                <!-- add exam -->
                <form action="edit.php" method="post" class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">image</label>
                            <input type="file" class="form-control" name="editfile" value="<?php echo $editfile; ?>" placeholder="image">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="Text" class="form-control" name="title" value="<?php echo $Title; ?>" placeholder="add exam title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Time</label>
                            <input type="Text" class="form-control" name="time" value="<?php echo $Time; ?>" placeholder="exam time in minutes">
                        </div>
                        <button type="submit" name="submit1" class="btn btn-primary">Update</button>
                    </div>
                </form>
                <!-- /add exam -->
                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="1076" height="454" style="display: block; width: 1076px; height: 454px;"></canvas>
            </main>

        </div>
    </div>
    <?php

    ?>
    <?php
    session_start();
    error_reporting(0);

    // Uploads files
    $imgid = intval($_GET['submit1']);
    if (isset($_POST['submit1'])) { // if save button on the form is clicked
        $aimage = $_FILES["editfile"]["name"];
        move_uploaded_file($_FILES["editfile"]["tmp_name"], "media/" . $_FILES["editfile"]["name"]);
        $sql = "update addexam set title=:$title image=:aimage time = :$time where id=:$id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->bindParam(':aimage', $aimage, PDO::PARAM_STR);
        $query->execute();
        if ($query->execute()) {
            echo '<script>alert(" image has been Updated.")</script>';
        } else {
            echo '<<script>alert("Something went wrong please try again.")</script>';
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>