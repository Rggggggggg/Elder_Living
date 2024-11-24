<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wheelchair Details Page</title>
  <link rel="stylesheet" href="/css/ProductDetailsPage/WheelchairDetailsPage.css">
  <link rel="stylesheet" href="../javascript/LandingPage.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <main class="container">
    <header class="header">
      <a href="/html/LandingPage.html" class="logo"> 
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
          src="/assets/search-icon.png"                                    
          alt="Search Icon" 
          class="search-icon"
        >
      </div>

      <div class="user-cart-container">
        <div class="topnav">
          <div class="user">
            <img src="/assets/user.png" alt="User Icon" class="user-icon">
            <a href="/html/Login.html" class="login_signup_link">
              Login / Signup
            </a>
          </div>
          <div class="cart">
            <img src="/assets/cart-icon.png" alt="" class="cart-icon">
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
            src="/assets/search-icon.png" 
            alt="Search Icon" 
            class="search-icon">
        </div>
        <li>
          <a class="nav-link" href="#">
            Home
          </a>
        </li>
        <li>
          <a class="nav-link" href="/html/ArticlesPage.html">
            Articles
          </a>
        </li>
        <li>
          <a class="nav-link" href="/html/AboutPage.html">
            About
          </a>
        </li>
        <li>
          <a class="nav-link" href="/html/ContactPage.html">
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
          <a class="nav-link" href="../html/user-account/AccountPage.html">
            Account
          </a>
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="dropdown-icon" style="margin: 0.2rem 0 0 0.5rem;">
            <path d="M14.25 6.375L9 11.625L3.75 6.375" stroke="#313A5E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </li>
      </ul>
    </nav>
    <div class="navbar-border"></div>

    <div class="product-container">
      <div class="product-image-container">
        <img src="/assets/standard-wheelchair.png" alt="Product Image" class="product-image">
      </div>
      <div class="product-details-container">
        <p class="category">Wheelchair Products</p>
        <h1 class="product-name">
          809 STANDARD <br>
          WHEELCHAIR
        </h1>
        <p class="product-price">
          ₱ 4,000
        </p>
        <img src="/assets/rate.png" alt="" class="rate-image">
        <p class="quantity">
          Quantity  
        </p>
        <div class="quantity-container">
          <button class="quantity-btn decrease" onclick="decreaseQuantity()">-</button>
          <input type="number" class="quantity-input" id="quantity" value="1" min="1">
          <button class="quantity-btn increase" onclick="increaseQuantity()">+</button>
        </div>

        <div class="product-buy-button">
          <button class="buy-btn">
            Buy Now
          </button>
          <a href="/html/CartPage.html" style="text-decoration: none;">
            <button class="add-to-cart-btn">
              Add to Cart 
            </button>
          </a>
        </div>
      </div>
    </div>

    <div class="product-description">
      <article class="description-title">
        <h1 class="description">Product Description</h1>
      </article>
      <p class="description-paragraph">
        The 809 Standard Wheelchair is a versatile and <br> 
        reliable mobility aid designed for everyday use.
      </p>
      <p class="item-weight">
        Item Weight <span class="weight">: 19kg</span>
      </p>
      <p class="dimension">
        Dimensions <span class="centimeter">: 90 x 21 x 92 cm</span>
      </p>
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
        <img src="/assets/gcash.png" alt="Gcash" class="payment-image">
        <h2 class="section-title">Follow Us</h2>
        <div class="social-icons">
          <img src="/assets/twitter.png" alt="Twitter">
          <img src="/assets/fb.png" alt="Facebook">
          <img src="/assets/insta.png" alt="Instagram">
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

function increaseQuantity() {
  const quantityInput = document.getElementById('quantity');
  quantityInput.value = parseInt(quantityInput.value) + 1;
}

function decreaseQuantity() {
  const quantityInput = document.getElementById('quantity');
  if (parseInt(quantityInput.value) > 1) {
    quantityInput.value = parseInt(quantityInput.value) - 1;
  }
}
</script>
</html>