<?php
include 'dbconn.php';

$username = 'SkildX';
$score = '38';

//Find user for user ID
$q_userID = mysqli_query($conn,"SELECT `id` FROM `users` WHERE `username` = '$username'");
$id_row = mysqli_fetch_assoc($q_userID);

//store id found on the row
$userid = $id_row["id"];

//check if user is found
if($q_userID){
    echo "User ID found!<br/>";
}else{
    die("Failed<br/>");
}



//Insert score record
$insert = "INSERT INTO `score_board`(`userID`,`username`,`score`) VALUES ('$userid','$username','$score')";
$q_scoreRecord = mysqli_query($conn,$insert);

//check if query is successful
if($q_scoreRecord){
    echo "Score Record inserted<br/>";
}else{
    die("Failed<br/>");
}