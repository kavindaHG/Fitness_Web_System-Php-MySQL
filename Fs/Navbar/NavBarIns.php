<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php" style="font-size:1.5rem; font-family-pacifico,cursive;">
    <img src="./images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
    NorseMen Fitness</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Your Guide
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="exercise.php">Exercises</a></li>
            <li><a class="dropdown-item" href="nutrition.php">Nutritions</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articles
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="articleEx.php">Exercises</a></li>
            <li><a class="dropdown-item" href="articleNu.php">Nutritions</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">FYI</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Calculators</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="AddEx.php">Add a New Exercise</a></li>
            <li><a class="dropdown-item" href="AddNu.php">Add a New Nutrition</a></li>
            <li><a class="dropdown-item" href="#">Add a New Article</a></li>  
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Contacts</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION["user"]["first_name"]; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><a class="dropdown-item" href="Controllers/clientController.php?action=logout">Sign Out</a></li>
            <li><a class="dropdown-item" href="#">Manage Website</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>