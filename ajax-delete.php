<?php
$student_id=$_POST["id"];
$conn=mysqli_connect("localhost","root","","todo") or die("Connection Failed");
$sql="DELETE * FROM todo_list WHERE ";
$result=mysqli_query($conn,$sql) or die("SQl Query Failed");