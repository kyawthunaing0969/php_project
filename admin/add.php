
<?php 
// Include the database configuration file  
include "../connection.php";
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    
    if(isset($_POST['submit'])){
        //Taking the files from input
        $file = $_FILES['file'];
        //Getting the file name of the uploaded file
        $fileName = $_FILES['file']['name'];
        //Getting the Temporary file name of the uploaded file
        $fileTempName = $_FILES['file']['tmp_name'];
        //Getting the file size of the uploaded file
        $fileSize = $_FILES['file']['size'];
        //getting the no. of error in uploading the file
        $fileError = $_FILES['file']['error'];
        //Getting the file type of the uploaded file
        $fileType = $_FILES['file']['type'];
    
        //Getting the file ext
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
    
        //Array of Allowed file type
        $allowedExt = array("jpg","jpeg","png","pdf");
    
        //Checking, Is file extentation is in allowed extentation array
        if(in_array($fileActualExt, $allowedExt)){
            //Checking, Is there any file error
            if($fileError == 0){
                //Checking,The file size is bellow than the allowed file size
                if($fileSize < 10000000){
                    //Creating a unique name for file
                    $fileNemeNew = uniqid('',true).".".$fileActualExt;
                    //File destination
                    $fileDestination = '../images/'.$fileNemeNew;
                    //function to move temp location to permanent location
                    move_uploaded_file($fileTempName, $fileDestination);
                    $title = $_POST['title'];
                    $time = $_POST['time'];
                    // Insert image content into database 
                    $insert = $con->query("INSERT into addexam (title,image, time) VALUES ('$title','$fileNemeNew', '$time')"); 
                     
                    //Message after success
                    echo "File Uploaded successfully";
                }else{
                    //Message,If file size greater than allowed size
                    echo "File Size Limit beyond acceptance";
                }
            }else{
                //Message, If there is some error
                echo "Something Went Wrong Please try again!";
            }
        }else{
            //Message,If this is not a valid file type
            echo "You can't upload this extention of file";
        }
    }
} 
 
// Display status message 
// echo $imageContent; 
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
   a:link {text-decoration:none;}
</style>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-black" href="add.php">
                        <h5>Add Subject</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-4 text-black" href="question.php">
                        <h5>Add Question</h5>
                    </a>
                </li>
            </ul>
            <a href="../home.php" class="text-black"><strong>Log Out</strong></a>
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
                <form method="post" enctype="multipart/form-data" class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">image</label>
                            <input type="file" class="form-control" name="file" placeholder="image">
                        </div>
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

                <div class="container my-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Add Subject</th>
                                <th>Exam time in minutes</th>
                                <th>Images</th>
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
                                                    <td><img src='../images/$row[image]' width='40' height='40'></td>
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