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
  <title>Elder Living | Popular Products Page</title>
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/elder-living-logo.png">
  <link rel="stylesheet" href="../css/PopularProductPage.css">
  <link rel="stylesheet" href="../javascript/LandingPage.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <main class="container">
    <header class="header">
      <a href="../html/LandingPage.php" class="logo"> 
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
              class="search-icon">
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
    
      <h1 class="Popular-products-text">
        POPULAR PRODUCTS
      </h1>

      <section class="popular_products_container">
        <div class="products_container">
        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>
  
        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>
  
        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>
  
        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>
  
        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>
  
        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>
  
        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>
  
        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>

        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>

        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>

        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>

        <article class="products">
          <div class="products_item">
            <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
          </div>
          <div class="wrap">
            <h1 class="products_details">809 Standard <br> Wheelchair</h1>
            <p class="products_price">₱ 4,000</p>
            <button class="add-to-cart">
              <svg viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88651 16.5703C5.23809 16.5703 5.52385 16.8922 5.52385 17.2883C5.52385 17.6844 5.23809 18.0054 4.88651 18.0054C4.53493 18.0054 4.25 17.6844 4.25 17.2883C4.25 16.8922 4.53493 16.5703 4.88651 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2623 16.5703C14.6139 16.5703 14.8997 16.8922 14.8997 17.2883C14.8997 17.6844 14.6139 18.0054 14.2623 18.0054C13.9108 18.0054 13.625 17.6844 13.625 17.2883C13.625 16.8922 13.9108 16.5703 14.2623 16.5703Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1V1C2.02329 1.19967 2.78658 2.05914 2.86398 3.09885L3.5352 12.1145C3.60018 12.9928 4.25085 13.6672 5.03233 13.6672H14.1234C14.8699 13.6672 15.503 13.0491 15.6105 12.215L16.4012 6.05522C16.4986 5.29534 15.9763 4.6153 15.2956 4.6153H3.01116" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.4688 8.07812H12.779" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Add to Cart
            </button>
          </div>
        </article>
        </div>
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