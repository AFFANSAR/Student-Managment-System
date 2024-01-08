<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location:login.php");
}elseif($_SESSION['usertype']=='student'){
    header("Location:login.php");
}

$host='localhost';
$user='root';
$password='';
$db="school";

$data=mysqli_connect($host,$user,$password,$db,4306);

$id=$_GET['student_id'];

$sql= "SELECT * FROM user WHERE id='$id'";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();


if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query="update user set username='$name', email='$email', phone='$phone', password='$password' where id='$id'";

    $result2=mysqli_query($data,$query);

    if($result2){
        header("location:view_std.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <?php 
    Include 'admin_css.php' ;
    ?>
    <style>
         label{
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top:10px;
        padding-bottom: 10px;
    }

    .div_deg{
        background-color: 	#6497b1;
        width:400px;
        padding-top: 70px;
        padding-bottom: 70px;
    }
    </style>
</head>
<body>
<?php
        Include 'admin_sidebar.php';

?>


    <div class="content">
        <center>
        <h1>Update Student</h1>

        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label for="">username</label>
                    <input type="text" name="name" id="" value="<?php
                        echo"{$info['username']}";
                    
                    ?> ">
                </div>

                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?php
                        echo"{$info['email']}";
                    
                    ?> "
                    >
                </div>

                <div>
                    <label for="">phone</label>
                    <input type="number" name="phone" value="<?php
                        echo"{$info['phone']}";
                    
                    ?> "
                     >
                </div>

                <div>
                    <label for="">password</label>
                    <input type="text" name="password" id=""
                    value="<?php
                        echo"{$info['password']}";
                    
                    ?> "
                    >
                </div>

                <div>
                    
                    <input  class='btn btn-success' type="submit" name="update"  value="update Details" id="">
                </div>
            </form>
        </div>
        </center>
    </div>



</body>
</html>