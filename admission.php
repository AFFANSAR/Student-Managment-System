<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location:login.php");
}elseif($_SESSION['usertype']=='student'){
    header("Location:login.php");
}

$host = "localhost";
$user="root";
$password="";
$db="school";

$data= mysqli_connect($host,$user,$password,$db,4306);

$sql="SELECT * FROM addmission ";
$result=mysqli_query($data,$sql);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <?php Include 'admin_css.php' ;?>
    <!-- <link rel="stylesheet" href="admin.css"> -->
</head>
<style>
    table, th , td {
  border:1px solid black;
}

td{
    padding:20px;
    background-color: #6497b1;
}
</style>
<body>
    <?php
        Include 'admin_sidebar.php';

?>
    


    <div class="content">
        <center>
        <h1> Applied for Admission</h1>
        <br>

        <table >
            <tr>
                <th style=" padding: 20px; font-size: 15px;">name</th>
                <th style=" padding: 20px; font-size: 15px;">email</th>
                <th style=" padding: 20px; font-size: 15px;">phome</th>
                <th style=" padding: 20px; font-size: 15px;">messgae</th>

            </tr>

            <?php 
                while($info=$result->fetch_assoc())
                {

              
            ?>

            <tr>
                <td>
                    <?php  echo "{$info['name']}"; ?>
                </td>
                <td>
                <?php  echo "{$info['email']}"; ?>
                </td>
                <td>
                <?php  echo "{$info['phone']}"; ?>
                </td>
                <td>
                <?php  echo "{$info['message']}"; ?>
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