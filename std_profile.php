<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location:login.php");
}
elseif($_SESSION['usertype']=='admin'){
    header("Location:login.php");
}

$host="localhost";

$user="root";

$password="";

$db="school";


$data=mysqli_connect($host,$user,$password,$db,4306);

 $name=$_SESSION['username'];
 $sql="SELECT * FROM user WHERE username='$name'";
 $result=mysqli_query($data,$sql);

 $info = mysqli_fetch_assoc($result);

 if(isset($_POST['update_profile'])){
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql2="UPDATE user SET email='$email', phone='$phone', password='$password' WHERE username='$name'";

    $result2 = mysqli_query($data,$sql2);

    if($result2){
        header("location:std_profile.php");
    }


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
<style>
    label{
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top:10px;
        padding-bottom: 10px;
    }
    .deg{
        background-color: 	#6497b1;
        width:400px;
        padding-top: 70px;
        padding-bottom: 70px;
    }
</style>
    
</head>
<body>

    <?php 
        include "student_sidebar.php";
    ?>

    <div class="content">
        <center>
            <h1>update your profile</h1>
            <br>
    <form action="#" method="POST">

    <div class="deg">

    
   
    
    <div>
        <label for="">Email</label>
        <input type="email" name="email" value="<?php 
        echo "{$info['email']}"
        ?>">
    </div>

    <div>
        <label for="">Phone</label>
        <input type="number" name="phone" value="<?php 
        echo "{$info['phone']}"
        ?>">
    </div>

    <div>
        <label for="">Password</label>
        <input type="text" name="password" value="<?php 
        echo "{$info['password']}"
        ?>">
    </div>
    <br>

    <div>
        
        <input  class="btn btn-primary " type="submit" name="update_profile" value="update profile">
    </div>



    </div>
    </form>
    </center>

    </div>
    


    <div class="content">
        

    </div>



</body>
</html>