<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <title>Capstone</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.jfif"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Contact Us</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="surfboards.php">SurfBoards</a>
                <a class="dropdown-item" href="skateboards.php">Skateboards</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>
    <div>
      <form method="POST" action="php/script.php">
      </form>
    </div>

    <!--php-->
    <?php
      echo "<h1>Skateboard Shop</h1>";
      echo '<div class="container">
      <div class="row" style="display: flex;">
        <div class="col-sm jumbotron" style="position: relative; left: -20px;">
          <a href="https://www.surfstationstore.com/products/sharp-eye-maguro-surfboard-futures" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/SHARP_EYE_MAGURO_SURFBOARD_FUTURES.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: SHARP EYE MAGURO SURFBOARD FUTURES</li>
              <li>Length: 67.2"</li>
              <li>Width: 20"</li>
              <li>Thickness: 2.50"</li>
              <li>Volume: 30.3L</li>
              <li>Fin Setup: Twin Futures</li>
              <li>Tech: Poly</li>
              <li>Tail Shape: Swallow</li>
            </ul>
          </a>
        </div>
        <div class="col-sm jumbotron">
          <a href="https://www.surfstationstore.com/products/modern-falcon-surfboard-1?_pos=1&_sid=9c9909011&_ss=r" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/MODERN_FALCON_SURFBOARD.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: MODERN FALCON SURFBOARD</li>
              <li>Length: 81.6"</li>
              <li>Width: 21 1/4"</li>
              <li>Thickness: 2 3/4"</li>
              <li>Volume: 43.0</li>
              <li>Fin Setup: Tri Fin FCS II</li>
              <li>Tech: Poly</li>
              <li>Tail Shape: Squash</li>
            </ul>
          </a>
        </div>
        <div class="col-sm jumbotron "style="position: relative; right: -20px;">
          <a href="https://www.surfstationstore.com/products/firewire-hydronaut-lft-surfboard-futures?_pos=1&_sid=a9fa4cb73&_ss=r" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/FIREWIRE_DOMINATOR_2.0_HELIUM_SURFBOARD_FCS_II.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: FIREWIRE DOMINATOR 2.0 HELIUM SURFBOARD - FCS II<li>
              <li>Length: 70.8" or 73.2"</li>
              <li>Width: 20 1/8" or 20 5/8"</li>
              <li>Thickness: 2 7/16 or 2 9/16"</li>
              <li>Volume: 31.5L or 36L</li>
              <li>Fin Setup: 5-Fin FCS II</li>
              <li>Tech: Helium</li>
              <li>Tail Shape: Squash</li>
            </ul>
          </a>
        </div>
      </div>
    </div>';
        echo '<div class="container">
      <div class="row" style="display: flex;">
        <div class="col-sm jumbotron" style="position: relative; left: -20px;">
          <a href="https://www.surfstationstore.com/collections/surfboards/products/js-industries-monsta-box-2020-squash-tail-easy-rider-surfboard-fcs-ii?variant=32884379123773" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/JS_MONSTA_BOX_2020_SQUASH_TAIL_EASY_RIDER_SURFBOARD_FCS_II.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: JS MONSTA BOX 2020 SQUASH TAIL EASY RIDER SURFBOARD - FCS II</li>
              <li>Length: 70.8" or 61.32</li>
              <li>Width: 19 1/2" or 19 7/8"</li>
              <li>Thickness: 2 1/2" or 2 5/8"</li>
              <li>Volume: 30L or 33.1L</li>
              <li>Fin Setup: Tri-Fin FCS II</li>
              <li>Tech: Poly</li>
              <li>Tail Shape: Squash</li>
            </ul>
          </a>
        </div>
        <div class="col-sm jumbotron">
          <a href="https://www.surfstationstore.com/collections/surfboards/products/lost-hydra-surfboard-libtech" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/LOST_HYDRA_SURFBOARD_LIBTECH.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: LOST HYDRA SURFBOARD - LIBTECH</li> 
              <li>Length: 63.6"</li>
              <li>Width: 20.25"</li>
              <li>Thickness: 2.5"</li>
              <li>Volume: 30.5L</li>
              <li>Fin Setup: 5-Fin FCS II Compatible</li>
              <li>Tech: LibTech</li>
              <li>Tail Shape: Split Diamond</li>
            </ul>
          </a>
        </div>
        <div class="col-sm jumbotron "style="position: relative; right: -20px;">
          <a href="" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/SHARP_EYE_DISCO_INFERNO_FUSION_DUAL_CORE_SURFBOARD_FCS_II.png" alt="">
            <p>Detail List</p>
            <ul>
              <li>Name: SHARP EYE DISCO INFERNO FUSION DUAL-CORE SURFBOARD - FCS II</li>
              <li>Length: 67.2"</li>
              <li>Width: 18 1/2"</li>
              <li>Thickness: 2.35"</li>
              <li>Volume: 24.5</li>
              <li>Fin Setup: Tri Fin FCS II</li>
              <li>Tech: Fusion Dual-Core</li>
              <li>Tail Shape: Round</li>
            </ul>
          </a>
        </div>
      </div>
    </div>';
    echo '<footer class="footer">Caleb Sonnichsens Capstone 2020</footer>';

    ?>
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Own Made JavaScript-->
    <script src="js/script.js"></script>
</body>
</html>