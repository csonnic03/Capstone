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
                <a class="nav-link" href="contact_us.php">Contact Us</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="surfboards.php">SurfBoards <span class="sr-only">(current)</span></a>
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
          <a href="https://www.surfstationstore.com/products/sharp-eye-maguro-surfboard-futures" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/SHARP_EYE_MAGURO_SURFBOARD_FUTURES.png" alt=""></a>
          <p></p>
          <p>Name: SHARP EYE MAGURO SURFBOARD FUTURES</p>
          <p>Length: 67.2"</p>
          <p>Width: 20"</p>
          <p>Thickness: 2.50"</p>
          <p>Volume: 30.3L</p>
          <p>Fin Setup: Twin Futures</p>
          <p>Tech: Poly</p>
          <p>Tail Shape: Swallow</p>
        </div>
        <div class="col-sm jumbotron">
          <a href="https://www.surfstationstore.com/products/modern-falcon-surfboard-1?_pos=1&_sid=9c9909011&_ss=r" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/MODERN_FALCON_SURFBOARD.png" alt=""></a>
          <p>Name: MODERN FALCON SURFBOARD</p>
          <p>Length: 81.6"</p>
          <p>Width: 21 1/4"</p>
          <p>Thickness: 2 3/4"</p>
          <p>Volume: 43.0</p>
          <p>Fin Setup: Tri Fin FCS II</p>
          <p>Tech: Poly</p>
          <p>Tail Shape: Squash</p>
        </div>
        <div class="col-sm jumbotron "style="position: relative; right: -20px;">
          <a href="https://www.surfstationstore.com/products/firewire-hydronaut-lft-surfboard-futures?_pos=1&_sid=a9fa4cb73&_ss=r" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/FIREWIRE_DOMINATOR_2.0_HELIUM_SURFBOARD_FCS_II.png" alt="">
            <p>Name: FIREWIRE DOMINATOR 2.0 HELIUM SURFBOARD - FCS II<p>
            <p>Length: 70.8" or 73.2"</p>
            <p>Width: 20 1/8" or 20 5/8"</p>
            <p>Thickness: 2 7/16 or 2 9/16"</p>
            <p>Volume: 31.5L or 36L</p>
            <p>Fin Setup: 5-Fin FCS II</p>
            <p>Tech: Helium</p>
            <p>Tail Shape: Squash</p>
        </div>
      </div>
    </div>';
        echo '<div class="container">
      <div class="row" style="display: flex;">
        <div class="col-sm jumbotron" style="position: relative; left: -20px;">
          <a href="https://www.surfstationstore.com/collections/surfboards/products/js-industries-monsta-box-2020-squash-tail-easy-rider-surfboard-fcs-ii?variant=32884379123773" class="mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/JS_MONSTA_BOX_2020_SQUASH_TAIL_EASY_RIDER_SURFBOARD_FCS_II.png" alt=""></a>
            <p>Name: JS MONSTA BOX 2020 SQUASH TAIL EASY RIDER SURFBOARD - FCS II</p>
            <p>Length: 70.8" or 61.32</p>
            <p>Width: 19 1/2" or 19 7/8"</p>
            <p>Thickness: 2 1/2" or 2 5/8"</p>
            <p>Volume: 30L or 33.1L</p>
            <p>Fin Setup: Tri-Fin FCS II</p>
            <p>Tech: Poly</p>
            <p>Tail Shape: Squash</p>
        </div>
        <div class="col-sm jumbotron">
          <a href="https://www.surfstationstore.com/collections/surfboards/products/lost-hydra-surfboard-libtech" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/LOST_HYDRA_SURFBOARD_LIBTECH.png" alt=""></a>
            <p>Name: LOST HYDRA SURFBOARD - LIBTECH</p> 
            <p>Length: 63.6"</p>
            <p>Width: 20.25"</p>
            <p>Thickness: 2.5"</p>
            <p>Volume: 30.5L</p>
            <p>Fin Setup: 5-Fin FCS II Compatible</p>
            <p>Tech: LibTech</p>
            <p>Tail Shape: Split Diamond</p>
        </div>
        <div class="col-sm jumbotron d-block" style="position: relative; right: -20px;">
          <a href="" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/SHARP_EYE_DISCO_INFERNO_FUSION_DUAL_CORE_SURFBOARD_FCS_II.png" alt=""></a>
            <p>Name: SHARP EYE DISCO INFERNO FUSION DUAL-CORE SURFBOARD - FCS II</p>
            <p>Length: 67.2"</p>
            <p>Width: 18 1/2"</p>
            <p>Thickness: 2.35"</p>
            <p>Volume: 24.5</p>
            <p>Fin Setup: Tri Fin FCS II</p>
            <p>Tech: Fusion Dual-Core</p>
            <p>Tail Shape: Round</p>
        </div>
      </div>
    </div>';
    echo '<div class="container">
    <div class="row" style="display: flex;">
      <div class="col-sm jumbotron" style="position: relative; left: -20px;">
        <a class="swap" href="https://us.oneill.com/collections/mens-wetsuits/products/5040-l43-reactor-ii-3-2-bz" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/REACTOR_BACK_ZIP_FULL_WETSUIT.png" alt=""><img class="img-fluid img-thumbnail" src="images/REACTOR_BACK_ZIP_FULL_WETSUIT_2.png" alt=""></a>
          <p>Name: REACTOR 2 3/2MM BACK ZIP FULL WETSUIT</p>
          <p>Description: The newly upgraded REACTOR-2 is engineered for performance in a value driven package. A perfect combination of stretch and durability. Fresh colors and graphics with style thats built to last.</p>
          <p>Back Zip - Easy Entry</p>
          <p>Wind-Proof Smoothskin</p>
          <p>Strategic Seam Placement
          <p>Adjustable Single Seal Collar</p>
          <p>Hidden Key Pocket</p>
          <p>Krypto Knee Padz</p>
          <p>Flatlock Stitched Breathable Seams</p>
          <p>UltraFlex Composite</p>
      </div>
      <div class="col-sm jumbotron">
        <a href="https://shop.sportsbasement.com/products/mens-surf-wetsuit" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/Mens_Surf_Suit_Oneill_Black.png" alt=""></a>
          <p>Name: Mens Surf Suit Oneill Black</p> 
          <p>Smooth Skin FluidFlex Firewall</p>
          <p>UltraFlex DS Neoprene</p>
          <p>Krypto Knee Padz</p>
          <p>Glued and Blindstitched Seams</p>
          <p>Double Super Seal Neck</p>
          <p>New Glued in Covert Zipper Construction
          <p>Updated Velcro Closure</p>
          <p>External Key Pocket with Loop</p>
          <p>Strategic Seamless Paddle Zones</p>
          <p>LSD: Lumbar Seamless Design</p>
      </div>
      <div class="col-sm jumbotron d-block" style="position: relative; right: -20px;">
        <a class="swap" href=https://us.oneill.com/products/5041-a00-reactor-2-mm-back-zip-spring"" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/REACTOR_BACK_ZIP_SPRING_WETSUIT.png" alt=""><img class="img-fluid img-thumbnail" src="images/REACTOR_BACK_ZIP_SPRING_WETSUIT_2.png" alt=""></a>
          <p>Name: REACTOR-2 2MM BACK ZIP S/S SPRING WETSUIT </p>
          <p>Decription: The newly upgraded REACTOR-2 is engineered for performance in a value driven package. A perfect combination of stretch and durability. Fresh colors and graphics with style thats built to last.</p>
          <p>Back Zip - Easy EntryM/p>
          <p>Wind-Proof SmoothskinM/p>
          <p>Strategic Seam PlacementM/p>
          <p>Adjustable Single Seal CollarM/p>
          <p>Flatlock Stitched Breathable SeamsM/p>
          <p>UltraFlex CompositeM/p>
      </div>
    </div>
  </div>';
  echo '<div class="container">
  <div class="row" style="display: flex;">
    <div class="col-sm jumbotron" style="position: relative; left: -20px;">
      <a class="swap" href="https://www.farfetch.com/shopping/women/duskii-fleur-sleek-surf-suit-item-14534094.aspx?fsb=1&size=19&storeid=10245&clickref=1101lcXzQYGf&utm_source=shopstyle&utm_medium=affiliate&utm_campaign=PHUS&utm_term=USNetwork&pid=performancehorizon_int&c=shopstyle&clickid=1101lcXzQYGf&af_siteid=1101l510&af_sub_siteid=1011l270&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/Womens_Fleur_Sleek_Surf_Suit.png" alt=""><img class="img-fluid img-thumbnail" src="images/Womens_Fleur_Sleek_Surf_Suit_2.png" alt=""></a>
        <p>Name: Womens Duskii Fleur Sleek Surf Suit</p>
        <p>Description: Black and multicoloured Fleur Sleek surf suit from duskii featuring a floral print, a deep V neck, a front button fastening, a fitted silhouette and long sleeves. Swimwear must be tried on over your own garments. POSITIVELY CONSCIOUS: This product is made with a material widely recognised as being better for the planet, so you can be confident you are choosing positively.</p>
        <p>Composition: Polyester 83%, Elastane 17%</p>
        <p>Designer Style ID: DLO9017F</p>
    </div>
    <div class="col-sm jumbotron">
      <a class="swap" href="https://www.farfetch.com/shopping/women/duskii-gisele-surf-suit-item-13365688.aspx?storeid=10245" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/Womens_Gisiele_Surf_suit_Duskii.png" alt=""><img class="img-fluid img-thumbnail" src="images/Womens_Gisiele_Surf_suit_Duskii_2.png" alt=""></a>
      <p>Name: Womens Océane Sleek long sleeve surf suit</p>
      <p>Océane Sleek long sleeve surf suit
      Teal blue stretch Océane Sleek long sleeve surf suit from duskii featuring a round neck, long sleeves, a v-neck, button detailing at the front and a brief style bottom. Swimwear must be tried on over your own garments.</p>
      <p>Composition: Nylon 82%, Spandex/Elastane 18%</p>
      <p>Designer Style ID: DLS9017T</p>
    </div>
    <div class="col-sm jumbotron d-block" style="position: relative; right: -20px;">
      <a href="https://www.matchesfashion.com/us/products/1199869?qxjkl=tsid:38929|cgn:J84DHJLQkR4&c3ch=LinkShare&c3nid=J84DHJLQkR4&utm_source=linkshare&utm_medium=affiliation&utm_campaign=us&utm_content=J84DHJLQkR4&rffrid=aff.linkshare.1808364.37420" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/Womens_Long_Sleeved_Surf_Suit_Dos_Gardenias.png" alt=""></a>
      <p>Name: Womens Long Sleeved Surf Suit Dos Gardenias</p>
      <p>COLOR: Beige</p>
      <p>COMPOSITION: 83% polyamide, 17% elastane</p>
      <p>CARE: Machine wash</p>
      <p>High-quality stretch fabric</p>
      <p>V-neck, long sleeves</p>
      <p>High-cut thigh, minimum-medium coverage</p>
      <p>Centre-front gold-tone metal hook and eye fastening</p>
      <p>Slip on</p>
    </div>
  </div>
</div>';
echo '<div class="container">
<div class="row" style="display: flex;">
  <div class="col-sm jumbotron" style="position: relative; left: -20px;">
    <a href="https://world.bicsport.com/7ft-surf-leash-std.html" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/7ft_Surf_Leash_Blue.png" alt=""></a>
      <p>Name: SURF LEASH STD</p>
      <p>Length: 7FT</p>
      <p>Rugged 7 mm polyurethane plastic cord for great durability</p>
      <p>Triple Velcro attachment to the board for secure fit</p>
      <p>Rail Saver system to protect the tail of your board from the pressure of the leash</p>
      <p>High quality swivel hardware for optimum performance</p>
      <p>Padded ankle calf cuff for comfort</p>
      <p>Quick release tab</p>
      <p>Eco-friendly packaging convertible in a wax box</p>
  </div>
  <div class="col-sm jumbotron">
    <a href=https://xmsurfmore.com/products/xm-surfboard-leash-comp?variant=1486417100829"" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/XM_Surf_Leash_Black.png" alt=""></a>
      <p>Name: XM Surf Leash Black</p> 
      <p>Length: 5Ft - 10 Ft</p>
      <p>COMPETITION STRENGTH/THICKNESS: .220 INCH DIAMETER XM POWER CORD</p>
      <p>1.5 INCH BY 10 INCH PREMIUM HOOK AND LOOP SINGLE-WRAP STRAP</p>
      <p>UNBREAKABLE STAINLESS STEEL XM SWIVELS</p>
      <p>Double Swivel Stand-Off Design</p>
      <p>Detachable Railsaver</p>
      <p>Key Pocket</p>
  </div>
  <div class="col-sm jumbotron d-block" style="position: relative; right: -20px;">
    <a href="https://xmsurfmore.com/products/xm-surfboard-leash-tangle-free-comp" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/XM_Surf_Leash_Yellow.png" alt=""></a>
      <p>Name: XM SURFBOARD LEASH / TANGLE-FREE / COMP (.220in)</p>
      <p>Length: 5Ft - 10Ft</p>
      <p>COMPETITION STRENGTH/THICKNESS: .220 INCH DIAMETER XM POWER CORD</p>
      <p>1.5 INCH BY 10 INCH PREMIUM HOOK AND LOOP SINGLE-WRAP STRAP</p>
      <p>Tangle Free Slider</p>
      <p>UNBREAKABLE STAINLESS STEEL XM SWIVELS</p>
      <p>Double Swivel Stand-Off Design</p>
      <p>Detachable Railsaver</p>
      <p>Key Pocket</p>
  </div>
</div>
</div>';
echo '<div class="container">
<div class="row" style="display: flex;">
  <div class="col-sm jumbotron" style="position: relative; left: -20px;">
    <a href="https://surfears.com/product/surfears-3-0/" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/SurfEars_3.0.png" alt=""></a>
      <p>Name: SurfEars 3.0</p>
      <p>Description: SurfEars, earplugs that let sound in and keep water out. They come with changeable parts in different sizes that allow you to customize them for your ears in order to find a comfortable and secure fit. Suitable for surfing, swimming, white water kayaking, diving, wake boarding  and other water activities.</p>
      <p>Lets sound in</p>
      <p>Keeps water out</p>
      <p>Great Confort</p>
      <p>Secure Fit</p>
      <p><strong>Whats in the box</strong></p>
      <p>One Pair of SurfEars, pre assembled with medium gels, large wings and an adjustable leash</p>
      <p> sealing gels, 2x size large, 2x size small, 2x size x-small</p>
      <p>Two support wings, size small</p>
      <p>An awesome storage case to keep them safe</p>
  </div>
  <div class="col-sm jumbotron d-block" style="position: relative; right: -20px;">
  <a href="" class=" mb-4 h-100"><img class="img-fluid img-thumbnail" src="images/Junior_2.0.png" alt=""></a>
  <p>Name: JUNIOR 2.0</p>
  <p>Description: JUNIOR, earplugs developed for children, keeping their ears safe while they are able to hear, speak and enjoy their time in the water.</p>
  <p>Suitable for most children age 5-12</p>
  <p>Lets sound in</p>
  <p>Keeps water out</p>
  <p>Great Confort</p>
  <p>Secure Fit</p>
  <p><strong>Whats in the box</strong></p>
  <p>One pair of Surf Ears Junior, pre-assembled with small gels and adjustable leash</p>
  <p>Sealing gels in size x-small</p>
  <p>An awesome storage case to keep them safe</p>
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