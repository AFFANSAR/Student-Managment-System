

<?php
session_start();
if( isset( $_SESSION['completed']) ){
    header("Location: index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Managment System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <h1> School Managment System</h1> -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Smart School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" >Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link admission" aria-disabled="false">Admission</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <!-- <button class="btn btn-outline-success" type="submit">Login</button> -->
        <a href="login.php" class="btn btn-outline-success">Login</a>
      </form>
    </div>
  </div>
</nav>
<div class="section1">
    <img class="head-img" src="2350.jpg">

</div>

<div class="container">
  <div class="row">
    <div class="col-4">
      <img class="one" src="school2.jpg">
    </div>
    <div class="col-8">
        <h1>welcome to Smart school</h1>
        <p>
A "Smart School" typically refers to an educational institution that incorporates advanced technology and innovative practices to enhance the learning experience and streamline administrative processes. Smart Schools leverage digital tools, data analytics, and communication technologies to create a more efficient and interactive educational environment.Smart Schools integrate various technologies such as interactive whiteboards, tablets, computers, and educational software to enhance teaching and learning experiences.They provide access to digital learning resources, including e-books, online tutorials, and educational apps, fostering a more dynamic and interactive learning environment.</p>

    </div>
    
  </div>
</div>
<center>
  <h1 class="teach">Our Teachers</h1>
</center>
    
<div class="container">
  <div class="row">
    <div class="col-4">
        <img class="teacher" src="teacher1.jpg">
        <p>Inspiring, dedicated, and passionate, our great teacher cultivates curiosity, fostering a love for learning in students.</p>
    </div>

    <div class="col-4">
    <img class="teacher" src="teacher2.jpg">
    <p>An inspiring mentor, our great teacher brings knowledge, passion, and encouragement to ignite students' curiosity and growth.</p>
    </div>

    <div class="col-4">
    <img class="teacher" src="teacher3.jpg">
    <p>Exceptional educator, inspiring minds, fostering growth, our great teacher shapes futures with passion and dedication.</p>
    </div>

  </div>
</div>

<center>
  <h1>Admission form</h1>
</center>

<div class="admissionform" align="center">
  <form action="Data.php" method="POST">
    <div class="ipt">
      <label class="txt">Name</label>
      <input class="input" type="text" name="name">
    <div>

    <div class="ipt">
      <label class="txt">Email</label>
      <input class="input" type="text" name="email">
    <div>

    <div class="ipt">
      <label class="txt">Phone</label>
      <input class="input" type="text" name="phone">
    <div>

    <div class="ipt">
      <label class="txt">Message</label>
      <textarea class="area" name="message"></textarea>
    <div>
      
    <div class="ipt" >
      <input class="btn btn-outline-success" type="submit" name="apply" value="apply"> 
    <div>



  </form>

<br>
<br>
</div>
<footer>
  <h2 class="footer">All @copyright reserved by web tech </h2>
</footer> 


</body>
</html>