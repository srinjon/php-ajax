<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table id="main">
        <tr>
            <td id="header">
                <h1>Add Todo</h1>
            </td>
        </tr>
        <tr>
            <td id="table-form">
                <form action="" id="add-form">
                Todo: <input type="text" name="" id="todo" required>
            
            <input type="submit" value="Save" id="save-button">
            </form>
            </td>
        </tr>
        <tr>
            <td id="table-data">
                
            </td>
        </tr>
    </table>
</body>
</html>
<script src="jquery/jquery.js"></script>
<script>
    $(document).ready(function(){
        function loadTable(){
            $.ajax({
            url: "ajax-load.php",
            type: "POST",
            success: function(data){
                $("#table-data").html(data);
            }
         });
        }
        loadTable();
       
        $("#save-button").on("click",function(e){
            e.preventDefault();
            var todo=$("#todo").val();
            $.ajax({
                url: "ajax-insert.php",
                type: "POST",
                data: {todos:todo},
                success:function(data){
                    if(data == 1){
                    loadTable();
                    $("#add-form").trigger("reset");
                    }else{
                        alert("Can't save record");
                    }
                }
            });
        
        $(document).on("click",".delete-btn",function(){
            var studentId= $(this).data("id");
            $.ajax({
                 url: "ajax-delete.php",
                 type: "POST",
                 data: {id: studentId},
                 success: function(data){
                    
                 }
            });
        });
        
        });
    });
</script>