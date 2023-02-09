<?php
include "../connection.php";
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $time = $_POST['time'];
    $sql = " INSERT INTO addexam(title, time) VALUES ( '$title', '$time' ) ";

    if (mysqli_query($con, $sql)) {
        header('location:add.php');
    } else {
        die(mysqli_error($con));
    }
    mysqli_close($con);
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
   
</style>
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

    <!-- dashboard -->
    <div class="container">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Add Subject</h1>

                </div>
                <!-- add exam -->
                <form method="post" d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="Text" class="form-control" name="title" placeholder="add exam title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Time</label>
                            <input type="Text" class="form-control" name="time" placeholder="exam time in minutes">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Add New</button>
                    </div>
                </form>

                <!-- start edit modal form -->
                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">Edit Exam</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Title</label>
                                            <input type="Text" class="form-control" name="title"  placeholder="add exam title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Time</label>
                                            <input type="Text" class="form-control" name="time"  placeholder=" exam time in minutes">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div> -->
                <!-- end edit modal form -->

            

                <div class="container my-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Add Subject</th>
                                <th>Exam time in minutes</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM addexam";
                            if ($result = mysqli_query($con, $query)) {
                                $rowcount = mysqli_num_rows($result);
                            }

                            for ($i = 0; $i < $rowcount; $i++) {
                                $row = mysqli_fetch_array($result);
                                echo "
                                                <tr>
                                                    <th>$row[id]</th>
                                                    <td>$row[title]</td>
                                                    <td>$row[time]</td>
                                                    <td>
                                                    <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
                                                    <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                                                            </td>
                                                </tr>
                                                ";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /add exam -->
                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="1076" height="454" style="display: block; width: 1076px; height: 454px;"></canvas>
            </main>
            <!-- /head -->
        </div>
    </div>
    
    <script src="../jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>