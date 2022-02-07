<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><img class="mb-4" src="../assets/img/PhillipsCheesesLogo.svg" alt="Go to main page" ></a></h1>
      <!-- <a href="index.php"><img class="mb-4" src="../assets/img/logo.jpg" alt="Go to main page" ></a> -->

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
            <?php  
              if(isset($_SESSION['name'])) {
                echo '<li><a class="nav-link scrollto active" href="personal_page.php">'.$_SESSION['fname'].'\'s Panel'.'</a></li>';
                }
              else {
                echo '<li><a class="nav-link scrollto active" href="#hero">Home</a></li>';
              }
            ?> 

          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Products</a></li>
          
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Gouda</a></li>
              <li class="dropdown"><a href="#"><span>Cheddar</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">New York Style</a></li>
                  <li><a href="#">Mild </a></li>
                  <li><a href="#">Medium</a></li>
                  <li><a href="#">Sharp</a></li>
                  <li><a href="#">Extra Sharp</a></li>
                </ul>
              </li>
              <li><a href="#">Blue Cheese</a></li>
              <li><a href="#">Mozzarella</a></li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li>
              <?php  
              if(isset($_SESSION['access'])) echo '<a class="getstarted scrollto" href="logout.php">Log out</a></li>';
              else echo ' <a class="getstarted scrollto" href="login.php">Log in / Register</a></li>';
              ?>
                          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->