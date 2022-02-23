<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&family=Pacifico&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <!-- CSS -->
     <link rel="stylesheet" href="css/style.css">

    <title>NorseMen Fitness</title>
  </head>
  <body>

  <?php include ('Navbar/NavBarLogin.php')?>

  <div class="container">
    <h1 class="text-center mt-5">Sign In</h1>
    <div class="row">
      <div class="col-md-6 offset-md-3 ">
        <div class="signup-form">
          <form  method="post" action="Controllers/clientController.php?action=loging" class= "mt-3 border p-4 bg-light">  
            <div class="row">
            <div class="mb-3 col-md-12">
              <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="mb-3 col-md-12">
              <input type="Password" name="Password" placeholder="Enter Password" class="form-control">
            </div>
            <div class="mb-3 col-md-6">
              <input type="checkbox">Remember Me
            </div>

            <div class="mb-3 col-md-6">
              <a href="" style="color:red;">Forget Password?</a>
            </div>
            
            <div class="mb-3 col-md-12">
              <button class="btn btn-primary">Sign In</button>
            </div>
</div>
          </form>
          <div>
          <p class="mt-2 col-12 text-center" style="font-size:1.2rem;">New User? <a href="SignUp.php">Sign Up Here</a></p>
        </div>
      </div>
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>