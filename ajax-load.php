<?php
$conn=mysqli_connect("localhost","root","","todo") or die("Connection Failed");
$sql="SELECT * FROM todo_list";
$result=mysqli_query($conn,$sql) or die("SQl Query Failed");
$output="";
$i=1;
if(mysqli_num_rows($result)>0){
 $output='<table border="1" width="100%" cellspacing="0" cellpadding="10px">
 <tr>
 <th>Id</th>
 <th>Name</th>
 <th>Delete</th>
 </tr>';
 while($row=mysqli_fetch_assoc($result)){
    $output .="<tr><td>{$row["id"]}</td><td>{$row["todolist"]}</td><td><button Class='delete-btn' data-id='{$row["id"]}'>Delete</button></td></tr>";
 }
 $output.="</table>";
 mysqli_close($conn);
 echo $output;
}else{
echo "No data found";
}