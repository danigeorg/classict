<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connection.php';


  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $pass1=$_POST['pass1'];
  $pass2=$_POST['pass2'];

  // $sql="insert into `registration`(fname,lname,email,phone,pass1,pass2)
  // values('$fname','$lname','$email', '$phone','$pass1','$pass2')";

  // $result=mysqli_query($con,$sql);



  // if($result){
  //   echo "date successfully";

  // }
  // else{
  //   die(mysqli_error($con));
  // }



  $sql="select * from  `registration` where email='$email'";

  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    
  }
  else{
     $sql="insert into `registration`(fname,lname,email,phone,pass1,pass2)
      values('$fname','$lname','$email', '$phone','$pass1','$pass2')";

    $result=mysqli_query($con,$sql);
    if($result){
    echo "Sign up successful ";

   }

  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Tailors</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  
    <div class="container">
    <form   method="POST" action="register.php" class=" my-5">
        <div class="row">
          <div class="col">
            <label for="inputName"> First Name</label>
            <input type="text" name="fname" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <label for="inputName">Last Name</label>
            <input type="text"  name="lname" class="form-control" placeholder="Last name">
          </div>
        </div>
      
        <div class="row">
          <div class="col"> 
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="col">
            <label for="inputphone">Phone</label>
            <input type="tel"  name="phone" class="form-control" placeholder="Phone">
          </div>
        </div>
      
        <div class="row">
          <div class="col">
            <label for="inputpassword"> Password</label>
            <input type="password" name="pass1"  class="form-control" placeholder="password">
          </div>
          <div class="col">
            <label for="inputpassword">Password</label>
            <input type="password" name="pass2"  class="form-control" placeholder="Enter your password Again">
          </div>
        </div>
        <button type="submit" name="btn"  class="btn btn-primary w-100">Sign in</button>
        <p class="form-text text-muted text-center my-1">Already have an account? <a href="login.html">Log in</a></p>
      </form>
      
    </div>






    

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>