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

  <?php include ('Navbar/NavBarIns.php')?>

  <div class="container">
  <h1 class="text-center mt-5">Add a New Nutrition</h1>
    <div class="row">
      <div class="col-md-6 offset-md-3 ">
        <div class="addNu">
          <form action="" class= "mt-5 border p-4 bg-light shadow">  
            <div class="row">
              <div class="mb-2 col-md-12">
                <label for="" class="label control-label">Topic</label>
                <input type="text" name="exercisename" placeholder="Enter a good caption" class="form-control">
              </div>
            </div>
            <div class="mb-2 col-md-12">
              <label for="" class="label control-label">Article Category</label>
                <select name="" class="form-control" id="">
                  <option> Exercise</option>
                  <option> Nutrition</option>
                  <option> FYI</option>
                </select>
            </div>
            <div class="mb-2 col-md-12">
              <label for="" class="label control-label">Article Body</label>
              <input type="text" name="body" class="form-control">
            </div>
            <div class="mb-2 col-md-12">
              <label for="" class="label control-label">Published Date</label>
              <input type="date" name="date" class="form-control">
            </div>
            <div class="mb-2 col-md-12">
              <label for="" class="label control-label">Author</label>
              <input type="text" name="author" class="form-control">
            </div>
            <div class="mb-2 col-md-12">
              <button class="btn btn-primary mt-3">Add to list</button>
            </div>
          </form>
        </div>
      </div>
          
    </div>
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>