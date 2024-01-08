<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location:login.php");
}elseif($_SESSION['usertype']=='student'){
    header("Location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="school";

$data=mysqli_connect($host,$user,$password,$db,4306);

if(isset($_POST['add_student'])){
    $username=$_POST['name'];
    $u_email=$_POST['email'];
    $u_phone=$_POST['phone'];
    $u_password=$_POST['password'];
    $usertype="student";


    //to check username is unique
    $check="SELECT * FROM user WHERE username ='$username'";

    $chech_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($chech_user);

    if($row_count==1){
        
        echo "<script type='text/javascript'> alert('username already exists try again with new username');
        </script>";
        
    }else{


    $sql="INSERT INTO user (username,email,phone,password,usertype) VALUES('$username','$u_email','$u_phone','$u_password','$usertype')";

    $result=mysqli_query($data,$sql);

    if($result){
        echo "<script type='text/javascript'> alert('Data uploded Successfully');
        </script>";
    }else{
        echo "<script type='text/javascript'> alert('Data uploding failed');
        </script>";
    }
    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student  </title>
    <?php 
    Include 'admin_css.php' ;
    ?>
</head>
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
<body>
<?php
        Include 'admin_sidebar.php';

?>


    <div class="content">
        <center>
        <h1> Add Student  </h1>
        <div class="deg">
            <form action="#"   method="POST">
                <div>
                    <label for="">username</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>

                <div>
                    <label for="">phone</label>
                    <input type="number" name="phone">
                </div>

                <div>
                    <label for="">password</label>
                    <input type="text" name="password">
                </div>

                <div>
                   
                    <input type="submit"  class=" btn btn-primary" name="add_student" value="Add">
                </div>
            </form>

        </div>
        </center>
    </div>



</body>
</html>