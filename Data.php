<?php

    $host="localhost";

    $user="root";

    $password="";

    $db="school";

    $data=mysqli_connect($host,$user,$password,$db,4306);

    if($data===false) {
        die("Could not connect to");
    }


    if(isset($_POST['apply'])){
        $d_name=$_POST['name'];
        $d_email=$_POST['email'];
        $d_phone=$_POST['phone'];
        $d_message=$_POST['message'];

        $sql="INSERT INTO addmission(name,email,phone,message) VALUES('$d_name','$d_email','$d_phone','$d_message')";

        $result = mysqli_query($data,$sql);

        if($result){
            echo "<script type='text/javascript'> alert(' Successfully Applied we will get in touch with you');
        </script>";
        }else
        {
            echo "<script type='text/javascript'> alert(' Fill in your details properly');
            </script>";
        }
    }













?>




