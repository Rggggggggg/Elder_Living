<?php 

session_start();
require '../html/connection/connection.php';

$username = $_SESSION['username'];
$email_phone = $_SESSION['email_phone'];
$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Page</title>
  <link rel="stylesheet" href="../css/CategoryPage.css">
  <link rel="stylesheet" href="../javascript/LandingPage.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <main class="container">
    <header class="header">
      <a 
        href="../html/LandingPage.php" 
        class="logo"> 
        Elder Living
      </a>
      
      <div class="search-container">
        <input 
          type="search" 
          class="search-input" 
          placeholder="Search for products...." 
          name="search"
        >
        <img 
          src="../assets/search-icon.png" 
          alt="Search Icon" 
          class="search-icon"
        >
      </div>

      <div class="user-cart-container">
        <div class="topnav">
          <div class="user">  
            <img src="../assets/user.png" alt="User Icon" class="user-icon">
            <a href="../html/logout.php" class="login_signup_link">
              <?php echo ($username) ?>
            </a>
          </div>
          <div class="cart">
            <img src="../assets/cart-icon.png" alt="" class="cart-icon">
            <a href="../html/CartPage.php" class="cart_link">
              Cart
            </a>
          </div>
          <div class="menu">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        </div>
      </div>
    </header>

    <div class="navbar-border"></div>
      <nav class="navbar" id="myTopnav">
        <ul>
          <div class="close-menu">
            <a href="javascript:void(0);" class="icon" onclick="CloseFunction()">
              <i class="fa fa-times"></i>
            </a>
          </div>
         <h1 class="nav-sidebar-logo">Elder Living</h1>
          <div class="sidebar-search-container">
            <input 
              type="search" 
              class="sidebar-search-input" 
              placeholder="Search for products...." 
              name="search"
            > 
            <img 
              src="../assets/search-icon.png" 
              alt="Search Icon" 
              class="search-icon"
            >
          </div>
          <li><a class="nav-link" href="../html/LandingPage.php">Home</a></li>
          <li><a class="nav-link" href="../html/ArticlesPage.php">Articles</a></li>
          <li><a class="nav-link" href="../html/AboutPage.php">About us</a></li>
          <li><a class="nav-link" href="../html/ContactPage.php">Contact</a></li>
          <li><a class="nav-link" href="../html/CategoryPage.php">Categories</a></li>
          <li><a class="nav-link" href="../html/user-account/AccountPage.php">Account</a></li>
        </ul>
      </nav>
      <div class="navbar-border"></div>

      <div class="browse-category">
        <h1 
          class="browse-title">
          ALL CATEGORIES
        </h1>
        <div 
          class="browse-header">
        </div>
      
        <div class="category">
          <a href="../html/categories-page/adaptive-kitchen-tools.php" class="Adaptive-kitchen-tools">
            <img src="../assets/adaptive-kitchen-tools.png" alt="" class="Adaptive-kitchen-tools-image">
            <h1 class="Adaptive-kitchen-tools-text">
              Adaptive Kitchen Tools
            </h1>
          </a>
      
          <div class="Bedroom-Bathroom">
            <img src="../assets/bedroom-bathroom.png" alt="" class="Bedroom-Bathroom-image">
            <h1 class="Bedroom-Bathroom-text">
              Bedroom / Bathroom
            </h1>
          </div>
      
          <div class="Core-products">
            <img src="../assets/core-products.png" alt="" class="Core-products-image">
            <h1 class="Core-products-text">
              Core Products
            </h1>
          </div>
      
          <div class="Daily-living-aids">
            <img src="../assets/daily-living-aids.png" alt="" class="Daily-living-aids-image">
            <h1 class="Daily-living-aids-text">
              Daily Living Aids
            </h1>
          </div>
      
          <div class="Emergency-medical">
            <img src="../assets/emergency-medical.png" alt="" class="Emergency-medical-image">
            <h1 class="Emergency-medical-text">
              Emergency Medical
            </h1>
          </div>

          <div class="section-two">
            <div class="First-aid-kits">
              <img src="../assets/first-aid-kits.png" alt="" class="First-aid-kits-image">
              <h1 class="First-aid-kits-text">
                First Aid Kits
              </h1>
            </div>
            <div class="Grab-bars">
              <img src="../assets/grab-bars.png" alt="" class="Grab-bars-image">
              <h1 class="Grab-bars-text">
                Grab Bars and Handrails
              </h1>
            </div>
            <div class="Home-safety">
              <img src="../assets/home-safety-comfort.png" alt="" class="Home-safety-image">
              <h1 class="Home-safety-text">
                Home Safety and Comfort
              </h1>
            </div>
            <div class="Incontinence-product">
              <img src="../assets/incontinence-product.png" alt="" class="Incontinence-product-image">
              <h1 class="Incontinence-product-text">
                Incontinence Products
              </h1>
            </div>
            <div class="Jar-openers">
              <img src="../assets/jar-openers.png" alt="" class="Jar-openers-image">
              <h1 class="Jar-openers-text">
                Jar Openers
              </h1>
            </div>
          </div>
        </div>
      </div>

      <div class="pagination">
        <a href="../CategoryPage.php"></a>
        <a href="../CategoryPage.php" class="active">1</a>
        <a href="../html/category-pagination/category-pagination-2.php">2</a> 
        <a href="../html/category-pagination/categoryy-pagination-3.php">3</a>
        <a href="../html/category-pagination/category-pagination-2.php">></a>
      </div>
  </main>

  <footer class="site-footer">
    <div class="footer-content">
      <div class="footer-section categories">
        <h2 class="section-title">Categories</h2>
        <div class="category-lists">
          <div class="category-group one">
            <a href="#" class="category-item">Adaptive Kitchen Tools</a>
            <a href="#" class="category-item">Bedroom / Bathroom</a>
            <a href="#" class="category-item">Core Products</a>
            <a href="#" class="category-item">Daily Living Aids</a>
            <a href="#" class="category-item">Emergency Medical Alarms</a>
            <a href="#" class="category-item">First-Aid Kits</a>
            <a href="#" class="category-item">Grab Bars and Handrails</a>
            <a href="#" class="category-item">Home Safety and Comfort</a>
            <a href="#" class="category-item">Kitchen Aids</a>
            <a href="#" class="category-item">Lighting Aids</a>
          </div>
          <div class="category-group two">
            <a href="#" class="category-item">Mobility Aids</a>
            <a href="#" class="category-item">Nutritional Supplements</a>
            <a href="#" class="category-item">Orthopaedic Supports</a>
            <a href="#" class="category-item">Personal Care Products</a>
            <a href="#" class="category-item">Reachers and Grabbers</a>
            <a href="#" class="category-item">Shower Chairs and Bath Seats</a>
            <a href="#" class="category-item">Wheelchair Products</a>
            <a href="#" class="category-item">Xerostomia Products</a>
            <a href="#" class="category-item">Zipper Pulls</a>
          </div>
        </div>
      </div>
  
      <div class="footer-section account-info">
        <h2 class="section-title">Account</h2>
        <a href="#" class="account-link">My Account</a>
        <a href="#" class="account-link">Login / Signup</a>
        <a href="#" class="account-link">Your Cart</a>
        <a href="#" class="account-link">Your Order</a>
        <a href="#" class="account-link">Shop</a>
      </div>
  
      <div class="footer-section quick-links">
        <h2 class="section-title">Quick Links</h2>
        <a href="#" class="quick-link-item">FAQ</a>
        <a href="#" class="quick-link-item">Contact</a>
        <a href="#" class="quick-link-item">About Us</a>
        <a href="#" class="quick-link-item">Home</a>
        <a href="#" class="quick-link-item">Articles</a>
      </div>
  
      <div class="footer-section payment-social">
        <h2 class="section-title">Payment Method</h2>
        <img src="../assets/gcash.png" alt="Gcash" class="payment-image">
        <h2 class="section-title">Follow Us</h2>
        <div class="social-icons">
          <img src="../assets/twitter.png" alt="Twitter">
          <img src="../assets/fb.png" alt="Facebook">
          <img src="../assets/insta.png" alt="Instagram">
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <h1 class="footer-copyright">© 2024 <span class="brand-name">Elder Living</span></h1>
    </div>
  </footer>
</body>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function CloseFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className.includes("closed")) {
        x.className = "navbar";
    } else {
        x.className += " closed";
    }
}

</script>
</html>