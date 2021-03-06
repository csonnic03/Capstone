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
      <a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Contact Us <span class="sr-only">(current)</span></a>
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
      echo "<h1>Contact Us</h1>";
      echo '<div class="container">
        <div class="row">
          <div class="col-sm"></div>
          <div class="col-sm">
          <form class="needs-validation" novalidate style="background-color: lightgrey; position: relative; left: -110px; top: 100px;margin: 20px; height: 20rem; width: 50rem">
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Name</label>
              <input type="text" class="form-control" id="validationCustom01" value="Name" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Email</label>
              <input type="email" class="form-control" id="validationCustom02" value="Email" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">City</label>
              <input type="text" class="form-control" id="validationCustom03" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">Country</label>
              <select class="custom-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>United States</option>
                <option>Canada</option>
                <option>United Kingdom</option>
                <option>Europe</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid Country.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom05">Message</label>
              <input type="text" class="form-control" id="validationCustom05" required>
              <div class="invalid-feedback">
                Please provide a message.
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
          <div class="col-sm"></div>
        </div>
      </div>';
      echo '<footer style="position: relative; bottom: -250px;" class="footer">Caleb Sonnichsens Capstone 2020</footer>';

    ?>
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Own Made JavaScript-->
    <script src="js/script.js"></script>
</body>
</html>