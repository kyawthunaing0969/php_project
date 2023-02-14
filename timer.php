<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php
include "connection.php";
session_start();
$title = $_SESSION["title"];
$res = mysqli_query($con, " select time from addexam where title = '$title'");
while ($row = mysqli_fetch_array($res)) {
    $time = $row["time"];
}

$mytime = $time;

//   echo "$mytime";
if (!isset($_SESSION['time'])) {

    $_SESSION['time'] = time();
} else {
    $diff = time() - $_SESSION['time'];
    $diff = $mytime - $diff;

    $hour = floor($diff / 60);
    $minute = (int)($diff / 60);
    $second = $diff % 60;

    $show = $hour . ":" . $minute . ":" . $second;
    if ($diff == 0 || $diff<0) {
        
       header('location:timeout.php',"refresh: 10");  
        exit;
      
        
    } else {        
        echo $show;
    }
}
?>

</body>
</html>

