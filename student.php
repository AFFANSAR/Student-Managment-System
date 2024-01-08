<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location:login.php");
}
elseif($_SESSION['usertype']=='admin'){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <?php 
        include "Student_css.php";



?>
    
</head>
<body>

<?php 
        include "student_sidebar.php";



?>
    


    <div class="content">
        <h1> Student dashboard</h1>

    </div>



</body>
</html>