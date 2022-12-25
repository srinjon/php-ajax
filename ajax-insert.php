<?php
$todo_list=$_POST['todos'];
$conn=mysqli_connect("localhost","root","","todo");
$sql="INSERT INTO todo_list(todolist) VALUES ('{$todo_list}')";
// $result=mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}