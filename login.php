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
  
    <div class="d-flex flex-column align-items-center  justify-content-center">
        <form class=" mt-2 w-50">
          <div class="row">
            <div class="col  mt-5 w-100"> 
              <label for="inputEmail4">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
          </div>
        </form>
      
        <form class="mt-2 w-50">
          <div class="row">
            <div class="col w-100">
              <label for="inputpassword">Password</label>
              <input type="password"  name="pass" id="pass" class="form-control" placeholder="Password">
            </div>
          </div>
        </form>
      
        <button type="submit" id="btn" name="btn" class="btn btn-primary w-50 mt-2">Sign up</button>
        <div class="d-flex justify-content-between  my-1" style="gap: 4rem;">
            <p class="form-text text-muted mb-0">
               Forget your login details? <a href="login.html">Get Help</a>
            </p>
            <p class="form-text text-muted mb-0 ">
              Don't have an account? <a href="register.html">Log In</a>
            </p>
          </div>
          
      </div>
      


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>