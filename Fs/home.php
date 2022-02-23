<?php 
session_start();
?>
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

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>NorseMen Empire</title>
  </head>
  <body>

    <!-- ======================================NavBar====================================== -->
    <?php if(isset($_SESSION["user"])){
        include ('Navbar/NavBarIns.php');
        }else{
          include ('Navbar/NavBarMain.php');
        } 
    ?>

          <!-- ======================================HomeMain====================================== -->
      <section class="main" id="home">
          <div class="container py-5">
              <div class="row py-5 mt-5">
                  <div class="col-xl-6 col-lg-6 col-md-12 pt-5 mt-5 text-center">
                      <h1 class="pt-4" style="margin-top:2rem !important;">We Will Make Your <br>Perfect  Body </h1>
                      <a class="btn btn-danger mt-5" href="joinus.php" role="button" style="border-radius:60px; outline:solid#ff9d01;width:40%; margin-top:5rem !important;">Join Us</a>
                    </div>
              </div>
          </div>
      </section>

    <!-- ======================================Info====================================== -->
      <section class="info">
          <div class="container py-5">
              <div class="row PT-5">
                  <div class="col-md-12 m-auto">
                      <div class="row text-center">
                          <div class="col-md-3">
                            <img src="images/img1.png" class="img-fluid" alt="">
                            <h6 class="pt-4">HEALTH</h6>
                          </div>

                          <div class="col-md-3">
                            <img src="images/img2.png" class="img-fluid" alt="">
                            <h6 class="pt-4">RESISNTANCE</h6>

                        </div>  

                            <div class="col-md-3">
                            <img src="images/img3.png" class="img-fluid" alt="">
                            <h6 class="pt-4">STRENGTH</h6>
                            </div> 
                        
                            <div class="col-md-3">
                            <img src="images/img4.png" class="img-fluid" alt="">
                            <h6 class="pt-4">ENERGY</h6>
                        </div> 
                      </div>
                  </div>
              </div>
          </div>
      </section> 
      
          <!-- ======================================MacroHome====================================== -->

          <section class="macroHome">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-md-6"></div>
                     <div class="col-md-6 mt-5">
                     <div class="col-12 pt-5 mt-5 text-center">
                        <h1 class="mt-5 pt-5 py-5">“That which is not measured, <br> cannot be managed” </h1>
                        <h6 class=" pt-5 py-5">With the help of our Macro Calculator, <br> you will take the first step toward the results you are looking for.</h6>
                        <a class="btn btn-danger" href="#" role="button" style="border-radius:60px; outline:solid#ff9d01;width: 40%;">Calculate Your Macros</a>
                    </div>
                     </div>
                </div>
            </div>
        </section>


          <!-- ======================================Cards====================================== -->
<section class="card mt-5 mb-5 pb-5" id="card">
      <div class="col-12">
        <h1 class="cardHeader">Check Out our Articles</h1>
      </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 ms-5 me-5">
  <div class="col">
    <div class="card h-100">
      <img src="images/card1.jpg" class="card-img-top img-fluid" alt="...">
      <div class="card-body mt-2">
        <h5 class="card-title" style="font-size:1.5rem; color:black; font-weight:500; font-family:poppins;">Exercise Articles</h5>
        <p class="card-text py-5" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <a href="exercise.php">Read More</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/card2.jpg" class="card-img-top img-fluid" alt="...">
      <div class="card-body mt-2">
        <h5 class="card-title" style="font-size:1.5rem; color:black; font-weight:500; font-family:poppins;">Nutrition Articles</h5>
        <p class="card-text py-5" style="color:black;">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
      <a href="nutrition.php">Read More</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/card3.png" class="card-img-top img-fluid" alt="...">
      <div class="card-body mt-2">
        <h5 class="card-title" style="font-size:1.5rem; color:black; font-weight:500; font-family:poppins;">FYI Articles</h5>
        <p class="card-text py-5" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
      <a href="fyi.php">Read More</a>
      </div>
    </div>
  </div>
</div>
</section>

          <!-- ======================================footer====================================== -->
<section class="section-subscribe bg-light" id="footer">
  <div class="container">
   <div class="row justify-content-center align-items-center">
     <div class="col-md-12 mb-4">
       <h1 class="mt-5 heading"  style="font-family:poppins; font-size:2rem; color:black; font-weight:bold" >
         Get News and Updates
       </h1>
     </div>
    <div class="col-md-12">
      <form action=""method="POST">
        <div class="row">
          <div class="col-md-4 mb-4 mt-5">
            <input type="text" class="form-control" placeholder="Your Name here">
          </div>

          <div class="col-md-4 mb-4 mt-5">
            <input type="email" class="form-control" placeholder="Your email here">
          </div>

          <div class="col-md-4 mb-4 mt-5">
            <input type="submit" class="btn btn-secondary w-100" value="Subscribe">
          </div>
        </div>
      </form>
    </div>
   </div>
  </div>
</section>

<?php
  if(isset($_GET['type'])){
?>
<div class="alert <?php if($_GET['type']=="success"){echo "alert-success";} else{echo "alert-danger";} ?> alert-dismissible fade show position-fixed  bottom-0 end-0" role="alert">
  <i class="far fa-check-circle mr-4"></i> <i><?php if(isset($_GET['msg'])){ echo base64_decode($_GET['msg']);} ?></i>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
  }
?>

<footer class="site-footer mt-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-4 mb-5">
        <h2 class="footerheading" >About Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem animi sequi quidem qui veniam tenetur quas possimus! Itaque, debitis est!</p>
      </div>
      <div class="col-md-4 mb-5">
        <h2 class="footerheading" style="font-family:poppins; font-size:22px; color:white; letter-spacing: .05em;">Contact Information</h2>
        <ul class="list-unstyled footer-link">
          <li class="d-flex">
            <span class="me-3">Telephone:</span><span class="text-white">+94 11 2569789</span>
          </li>

          <li class="d-flex">
            <span class="me-3">Email:</span><span class="text-white">norsemenfitness2021@gmail.com</span>
          </li>

          <li class="d-flex">
            <span class="me-3">Facebook:</span><span class="text-white">Norsemen Fitness</span>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
    <h2 class="social" style="font-family:poppins; font-size:22px; color:white; letter-spacing: .05em; font-weight:bold;">Connect with US</h2>
    <ul class="list-unstyled footer-link d-flex footer-social">
      <li><a href="..."><span class="fab fa-facebook"></span></a></li>
      <li><a href="www.facebook.com"><span class="fab fa-instagram"></span></a></li>
      <li><a href="www.facebook.com"><span class="fab fa-youtube"></span></a></li>
      <li><a href="www.facebook.com"><span class="fab fa-linkedin"></span></a></li>
      <li><a href="www.facebook.com"><span class="fab fa-twitter"></span></a></li>
    </ul>
  </div>
  </div>

    <div class="row">
      <div class="col-12 text-md-center text-center" style="margin-bottom:0px;">
        <P class="copyrights">This Website Is made By Hesh |   All Right Reserved 2021 |  Copyright not Allowed</P>
        </div>
      </text>
    </div>
  
  </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>