<?php

    session_start();
    $host="localhost";
    $user="root";
    $password="";
    $db='school';

    $data=mysqli_connect($host,$user,$password,$db,4306);

    if($_GET['student_id'])
    {
        $user_id=$_GET['student_id'];

        $sql="DELETE FROM user WHERE id='$user_id'";

        $result =mysqli_query($data,$sql);

        if($result)
        {
            $_SESSION['message']='Student deleted successfully';
            header("Location:view_std.php");
        }
    }


?>