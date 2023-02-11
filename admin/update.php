<?php
     $status = $statusMsg = ''; 
         $status = 'error'; 
         
         if(isset($_POST['submit1'])){
             //Taking the files from input
             $file = $_FILES['editfile'];
             //Getting the file name of the uploaded file
             $fileName = $_FILES['editfile']['name'];
             //Getting the Temporary file name of the uploaded file
             $fileTempName = $_FILES['editfile']['tmp_name'];
             //Getting the file size of the uploaded file
             $fileSize = $_FILES['editfile']['size'];
             //getting the no. of error in uploading the file
             $fileError = $_FILES['editfile']['error'];
             //Getting the file type of the uploaded file
             $fileType = $_FILES['editfile']['type'];
         
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
                          mysqli_query($con, "update addexam set title = '$title', image= '$fileNemeNew', time = '$time'");
                          
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
     
    ?>