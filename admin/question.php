<?php
         include "../connection.php";
            if (isset($_POST['submit'])) {
                $title = $_POST['subject'];
                $question = $_POST['question'];
                $option_a = $_POST['option-a'];
                $option_b = $_POST['option-b'];
                $option_c = $_POST['option-c'];
                $option_d = $_POST['option-d'];
                $answer = $_POST['answer'];
                $sql = " INSERT INTO question VALUES (NULL,'$title','$question', '$option_a', '$option_b','$option_c','$option_d', '$answer')";

                if (mysqli_query($con, $sql)) {
                    header('location:question.php');
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
                    <h1 class="h2">Add Question</h1>

                </div>
                <!-- add exam -->
                <form method="post" class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Title</label>

                            <select name="subject" class="form-select" aria-label="Default select example">
                                <?php
                                include "../connection.php";
                                $Title = '';
                                $res = mysqli_query($con, " select title from addexam ");
                                while ($row = mysqli_fetch_array($res)) {
                                    $Title = $row["title"];
                                    echo "<option value='$Title'>$Title</option>";
                                }
                                ?>
                            </select>
                           
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Question</label>
                            <input type="Text" class="form-control" name="question" style="height: 60px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">option-a</label>
                            <input type="Text" class="form-control" name="option-a">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">option-b</label>
                            <input type="Text" class="form-control" name="option-b">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">option-c</label>
                            <input type="Text" class="form-control" name="option-c">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">option-d</label>
                            <input type="Text" class="form-control" name="option-d">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Answer</label>
                            <input type="Text" class="form-control" name="answer">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

                <div class="container my-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Question</th>
                                <th>opt_a</th>
                                <th>opt_b</th>
                                <th>opt_c</th>
                                <th>opt_d</th>
                                <th>Answer</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = " SELECT * FROM question";
                            if ($result = mysqli_query($con, $query)) {
                                $rowcount = mysqli_num_rows($result);
                            }

                            for ($i = 0; $i < $rowcount; $i++) {
                                $row = mysqli_fetch_array($result);
                                echo "
                                                <tr>
                                                    <th>$row[id]</th>
                                                    <td>$row[title]</td>
                                                    <td>$row[question]</td>
                                                    <td>$row[opt1]</td>
                                                    <td>$row[opt2]</td>
                                                    <td>$row[opt3]</td>
                                                    <td>$row[opt4]</td>
                                                    <td>$row[answer]</td>
                                                    <td>
                                                    <a class='btn btn-success' href='edit1.php?id=$row[id]'>Edit</a>
                                                    <a class='btn btn-danger' href='delete1.php?id=$row[id]'>Delete</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>