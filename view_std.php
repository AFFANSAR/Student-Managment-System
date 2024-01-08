<?php
error_reporting(0);
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

$data = mysqli_connect($host,$user,$password,$db,4306);

$sql="SELECT * FROM user where usertype='student'";
$result=mysqli_query($data,$sql);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <?php 
    Include 'admin_css.php' ;
    ?>
</head>
<style>
     table, th , td {
        border:1px solid black;
    }

    td{
        padding:20px;
    }

    th{
        padding: 20px;
        font-size:20px;
    }

    td{
        padding: 20px;
        background-color: #6497b1;

    }
</style>
<body>
<?php
        Include 'admin_sidebar.php';

?>


    <div class="content">
        <center>
        <h1> Student  Data</h1>

        <?php 
        if($_SESSION['message'])
        {
            echo $_SESSION['message'];
        } 
            unset($_SESSION['message']);       
        ?>
        <br>
        <table>
            <tr>
                <th>username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php
                while($info=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td>
                    <?php  echo"{$info['username']}"; ?>
                </td>
                <td>
                <?php  echo"{$info['email']}"; ?>
                </td>
                <td>
                <?php  echo"{$info['phone']}"; ?>
                </td>
                <td>
                <?php  echo"{$info['password']}"; ?>
                </td>

                <td>
                <?php  echo"<a Class='btn btn-danger' onClick=\"javascript:return confirm('Are you sure to delete the data');\" href='delete.php?student_id={$info['id']}'>Delete</a>"; ?>
                </td>

                <td>
                <?php  echo "<a Class='btn btn-primary' href='update_std.php?student_id={$info['id']}'>Update</a>"; ?>
                </td>
            </tr>
            <?php
                }
                ?>
        </table>
        </center>
    </div>



</body>
</html>