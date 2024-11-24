<?php 

session_start();
require '../connection/connection.php';

$username = $_SESSION['username'];
$name = $_SESSION['name'];
$email_phone = $_SESSION['email_phone'];

// Mask email
function maskEmail($email){
  $parts = explode("@", $email);
  $username = $parts[0];
  $domain = $parts[1];
  $visible = substr($username, 0, 2);
  $maskedUsername = $visible . str_repeat("*", strlen($username) - 2);
  return $maskedUsername . "@" . $domain;
}

$maskedEmail = maskEmail($email_phone);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elder Living | Account Purchase Page</title>
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/elder-living-logo.png">
  <link rel="stylesheet" href="../../css/user-account/PurchasePage.css">
  <link rel="stylesheet" href="../javascript/LandingPage.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <main class="container">
    <header class="header">
      <a 
        href="../LandingPage.php" 
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
          src="../../assets/search-icon.png" 
          alt="Search Icon" 
          class="search-icon"
        >
      </div>

      <div class="user-cart-container">
        <div class="topnav">
          <div class="user">
            <img src="../../assets/user.png" alt="User Icon" class="user-icon">
            <a href="../../html/Login.php" class="login_signup_link">
              <?php echo ($username) ?>
            </a>
          </div>
          <div class="cart">
            <img src="../../assets/cart-icon.png" alt="" class="cart-icon">
            <a href="" class="cart_link">
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
            name="search"> 
          <img 
            src="../../assets/search-icon.png" 
            alt="Search Icon" 
            class="search-icon">
        </div>
        <li>
          <a class="nav-link" href="#">
            Home
          </a>
        </li>
        <li>
          <a class="nav-link" href="../../html/ArticlesPage.php">
            Articles
          </a>
        </li>
        <li>
          <a class="nav-link" href="../../html/AboutPage.php">
            About
          </a>
        </li>
        <li>
          <a class="nav-link" href="../../html/ContactPage.php">
            Contact
          </a>
        </li>
        <li class="dropdown" style="display: flex; cursor: pointer;">
          <a class="nav-link" href="#">
            Categories
          </a>
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="dropdown-icon" style="margin: 0.2rem 0 0 0.5rem;">
            <path d="M14.25 6.375L9 11.625L3.75 6.375" stroke="#313A5E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </li>
        <li class="dropdown" style="display: flex; cursor: pointer;">
          <a class="nav-link" href="#">
            Account
          </a>
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="dropdown-icon" style="margin: 0.2rem 0 0 0.5rem;">
            <path d="M14.25 6.375L9 11.625L3.75 6.375" stroke="#313A5E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </li>
      </ul>
    </nav>
    <div class="navbar-border"></div>


    <section class="account-container">
      <article class="account-navigation">
        <div class="profile">
          <img src="../../assets/profile.png" alt="Profile Picture" style="width: 5rem;">
          <div class="account-info">
            <p class="name"><?php echo ($name) ?></p>
            <p class="email"><?php echo ($maskedEmail) ?></p>
          </div>
        </div>

        <div class="account-options">
          <a href="" class="account-option manage">Manage my Account</a>
          <a href="../../html/user-account/AccountPage.php" class="account-option personal">Personal Information</a>
          <a href="../../html/user-account/AddressPage.php" class="account-option address">Addresses</a>
          <a href="../../html/user-account/PasswordPage.php" class="account-option password">Password</a>
          <a href="" class="account-option purchase">My Purchase</a>
          <a href="../logout.php" class="account-logout">LOGOUT</a>
        </div>
      </article>

      <article class="account-information">
        <div class="account-section-one">
          <h1>
            My Purchase 
          </h1>
          <p>
            Purchase history
          </p>
        </div>

        <div class="account-section-two">
          <div class="purchase-status">
            <label for="" class="status">All</label>
          </div>

          <div class="purchase-history">
            <div class="purchase-product">
              <img src="../../assets/standard-wheelchair.png" alt="" class="product-image">
              <p class="product-name">Standard Wheelchair<br><span class="price">x3</span></p>
            </div>
            <div class="subtotal">
              <p class="total-price">
                ₱10,800
              </p>
            </div>
          </div>
          <div class="purchase-history-button">
            <button class="rate-btn">
              Rate
            </button>
            <button class="buy-again-btn">
              Buy Again
            </button>
          </div>
            
      </article>
    </section>
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
        <img src="../../assets/gcash.png" alt="Gcash" class="payment-image">
        <h2 class="section-title">Follow Us</h2>
        <div class="social-icons">
          <img src="../../assets/twitter.png" alt="Twitter">
          <img src="../../assets/fb.png" alt="Facebook">
          <img src="../../assets/insta.png" alt="Instagram">
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