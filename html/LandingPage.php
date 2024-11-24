<?php 
session_start();

require 'connection/connection.php';

if(!isset($_SESSION['username'])){
  header("Location: Login.php");
  exit();
}

$username = $_SESSION['username'];
$email_phone = $_SESSION['email_phone'];
$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elder Living | Landing Page</title>
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/elder-living-logo.png">
  <link rel="stylesheet" href="../css/LandingPage.css">
  <link rel="stylesheet" href="../javascript/LandingPage.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <main class="container">
    <header class="header">
      <h1 class="logo"> 
        Elder Living
      </h1>
      
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
              <?php echo ($username); ?>
            </a>
          </div>
          <div class="cart">
            <a href="../html/CartPage.php"><img src="../assets/cart-icon.png" alt="" class="cart-icon"></a>
            <a class="cart_link">
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
            src="../assets/search-icon.png" 
            alt="Search Icon" 
            class="search-icon">
        </div>
        <li>
          <a class="nav-link" href="#">
            Home
          </a>
        </li>
        <li>
          <a class="nav-link" href="../html/ArticlesPage.php">
            Articles
          </a>
        </li>
        <li>
          <a class="nav-link" href="../html/AboutPage.php">
            About
          </a>
        </li>
        <li>
          <a class="nav-link" href="../html/ContactPage.php">
            Contact
          </a>
        </li>
        <li class="dropdown" style="display: flex; cursor: pointer;">
          <a class="nav-link" href="CategoryPage.php">
            Categories
          </a>
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="dropdown-icon" style="margin: 0.2rem 0 0 0.5rem;">
            <path d="M14.25 6.375L9 11.625L3.75 6.375" stroke="#313A5E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </li>
        <li class="dropdown" style="display: flex; cursor: pointer;">
          <a class="nav-link" href="../html/user-account/AccountPage.php">
            Account
          </a>
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="dropdown-icon" style="margin: 0.2rem 0 0 0.5rem;">
            <path d="M14.25 6.375L9 11.625L3.75 6.375" stroke="#313A5E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </li>
      </ul>
    </nav>
    <div class="navbar-border"></div>

    <div class="slider">
      <div class="wrapper">
        <img src="../assets/slider2.png" alt="Image 2">
        <img src="../assets/slider1.png" alt="Image 1">
        <img src="../assets/slider2.png" alt="Image 2">
        <img src="../assets/slider1.png" alt="Image 1">
      </div>
    </div>

    <section class="browse-category">
      <div class="browse-header">
        <h1 class="browse-title">
          Browse by Category
        </h1>
        <a href="../html/CategoryPage.php" class="browse-link">
          View All
        </a>
      </div>
    
      <div class="category">
        <!-- Adaptive kitchen tools -->
        <div class="category-item">
          <img src="../assets/adaptive-kitchen-tools.png" alt="Adaptive Kitchen Tools" class="category-image">
          <h2 class="category-text">Adaptive Kitchen Tools</h2>
        </div>

        <!-- Bedroom / Bathroom -->
        <div class="category-item">
          <img src="../assets/bedroom-bathroom.png" alt="Bedroom / Bathroom" class="category-image">
          <h2 class="category-text">Bedroom / Bathroom</h2>
        </div>
    
        <!-- Core Products -->
        <div class="category-item">
          <img src="../assets/core-products.png" alt="Core Products" class="category-image">
          <h2 class="category-text">Core Products</h2>
        </div>
    
        <!-- Daily Living Aids -->
        <div class="category-item">
          <img src="../assets/daily-living-aids.png" alt="Daily Living Aids" class="category-image">
          <h2 class="category-text">Daily Living Aids</h2>
        </div>
    
        <!-- Emergency Medical -->
        <div class="category-item">
          <img src="../assets/emergency-medical.png" alt="Emergency Medical Alarms" class="category-image">
          <h2 class="category-text">Emergency Medical</h2>
        </div>
      </div>
    </section>

    <section class="popular_products_container">
      <article class="products_header_link">
        <h1 class="products-title">Popular Products</h1>
        <a href="../html/PopularProductPage.php" class="product_link">View All</a>
      </article>

      <div class="products_container">
        <article class="products">
          <a href="../html/ProductsDetailsPage/Wheelchair-Details.php">
            <div class="products_item">
              <img src="../assets/standard-wheelchair.png" alt="Wheelchair" class="products_image">
            </div>
          </a>
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
      
    <section class="daily-essentials">
      <div class="essentials-header">
        <h1 class="essentials-title">
          Daily Essentials
        </h1>
      </div>

      <div class="essentials">
        <!-- Wheelchair -->
        <div class="essentials_item">
          <img src="../assets/standard-wheelchair.png" alt="809 Standard Wheelchair" class="essentials_image">
          <h1 class="essentials_details">809 Standard Wheelchair</h1>
          <p class="essentials_price">₱ 4,000</p>
        </div>

        <!-- Adult Diapers -->
        <div class="essentials_item">
          <img src="../assets/adult-diapers.png" alt="Adult Diapers" class="essentials_image essentials_margin-small">
          <h1 class="essentials_details">Adult Diapers</h1>
          <p class="essentials_price">₱ 250.00</p>
        </div>

        <!-- Incontinence Cleanser -->
        <div class="essentials_item">
          <img src="../assets/Incontenience Cleanser.png" alt="Incontinence Cleanser" class="essentials_image essentials_large">
          <h1 class="essentials_details">Incontinence Cleanser</h1>
          <p class="essentials_price">₱ 260.00</p>       
        </div>

        <!-- Non slip mat -->
        <div class="essentials_item">
          <img src="../assets/Non slip mat.png" alt="Non slip mat" class="essentials_image essentials_large" style="width: 16rem;">
          <h1 class="essentials_details">Non slip mat </h1>
          <p class="essentials_price"> ₱ 129 </p>       
        </div>

        <!-- Toothette Plus Swabs -->
        <div class="essentials_item">
          <img src="../assets/Toothette Plus Swabs.png" alt="Toothette Plus Swabs" class="essentials_image essentials_large" style="width: 16rem;">
          <h1 class="essentials_details">Toothette Plus Swabs</h1>
          <p class="essentials_price">₱ 700</p>       
        </div>

        <!-- Toothette Mouth Moisturizer -->
        <div class="essentials_item">
          <img src="../assets/Toothette Mouth Moisturizer.png" alt="Toothette Mouth Moisturizer" class="essentials_image essentials_large" style="width: 16rem; height: 10rem; margin: 3rem 0 2.5rem 1rem;">
          <h1 class="essentials_details">Toothette Mouth Moisturizer</h1>
          <p class="essentials_price">₱ 583</p>       
        </div>
      

        <!-- Vegetable Chopper Handle Food -->
        <div class="essentials_item">
          <img src="../assets/Vegetable Chopper Handle Food.png" alt="Vegetable Chopper Handle Food" class="essentials_image essentials_large" style="width: 14rem; height: 14rem; margin: 1.5rem 0 0 2rem;">
          <h1 class="essentials_details">Vegetable Chopper Handle Food</h1>
          <p class="essentials_price">₱ 1,986.89</p>       
        </div>

        <!-- folding-walker -->
        <div class="essentials_item">
          <img src="../assets/Folding Rollator Walker.png" alt="Folding Rollator Walker" class="essentials_image essentials_large" style="width: 14rem; height: 14rem; margin: 1.5rem 0 0 2rem;">
          <h1 class="essentials_details">Folding Rollator Walker</h1>
          <p class="essentials_price">₱ 1,500</p>       
        </div>


        <!-- SuperNutrition -->
        <div class="essentials_item">
          <img src="../assets/SuperNutrition.png" alt="SuperNutrition" class="essentials_image essentials_large" style="width: 12rem; height: 15rem; margin: 1rem 0 0 3rem;">
          <h1 class="essentials_details">SuperNutrition SimplyOne</h1>
          <p class="essentials_price">₱ 1,500</p>       
        </div>


        <!-- mobility-steps -->
        <div class="essentials_item">
          <img src="../assets/mobility-steps.png" alt="mobility-steps" class="essentials_image essentials_large" style="width: 14rem; height: 15rem; margin: 1rem 0 0 2rem;">
          <h1 class="essentials_details">Mobility steps</h1>
          <p class="essentials_price">₱ 12,815.66</p>       
        </div>

        <!-- elastic-shoelace -->
        <div class="essentials_item">
          <img src="../assets/elastic-shoelace.png" alt="mobility-steps" class="essentials_image essentials_large" style="width: 14rem; height: 14rem; margin: 1rem 0 1rem 2rem;">
          <h1 class="essentials_details">Elastic Shoelaces</h1>
          <p class="essentials_price">₱ 150</p>       
        </div>

        <!-- elastic-shoelace -->
        <div class="essentials_item">
          <img src="../assets/Commode Shower Chair.png" alt="Commode Shower Chair" class="essentials_image essentials_large" style="width: 14rem; height: 14rem; margin: 1rem 0 1rem 2rem;">
          <h1 class="essentials_details">Commode Shower Chair</h1>
          <p class="essentials_price">₱ 3,500</p>       
        </div>
      </div>

      <div class="view-more">
        <button class="view-more-btn">See More</button>
      </div>

    </section>
  
    <div class="features">
      <article class="payment">
        <img src="../assets/pay-icon.png" alt="" class="payment-icon">
        <h1 class="payment-title">
          Inclusive Payments
        </h1>
        <p class="payment-paragraph">
          Enjoy a secure and easy-to-use <br> 
          payment methods.
        </p>
      </article>
  
      <article class="informative">
        <img src="../assets/info-icon.png" alt="" class="info-icon">
        <h1 class="info-title">
          Informative Resources
        </h1>
        <p class="informative-paragraph">
          Access helpful articles and guides to <br> 
          make informed decisions.
        </p>
      </article>
  
      <article class="time">
        <img src="../assets/time-icon.png" alt="" class="time-icon">
        <h1 class="time-title">
          Time - Saving
        </h1>
        <p class="time-paragraph">
          Effortless navigation and personalized <br> 
          recommendations to save time.
        </p>
      </article>
    </div>

</main>
  <footer class="site-footer">
    <div class="footer-content">
      <div class="footer-section categories">
        <h2 class="section-title">Categories</h2>
        <div class="category-lists">
          <div class="category-group one">
            <a href="#" class="category-label">Adaptive Kitchen Tools</a>
            <a href="#" class="category-label">Bedroom / Bathroom</a>
            <a href="#" class="category-label">Core Products</a>
            <a href="#" class="category-label">Daily Living Aids</a>
            <a href="#" class="category-label">Emergency Medical Alarms</a>
            <a href="#" class="category-label">First-Aid Kits</a>
            <a href="#" class="category-label">Grab Bars and Handrails</a>
            <a href="#" class="category-label">Home Safety and Comfort</a>
            <a href="#" class="category-label">Kitchen Aids</a>
            <a href="#" class="category-label">Lighting Aids</a>
          </div>
          <div class="category-group two">
            <a href="#" class="category-label">Mobility Aids</a>
            <a href="#" class="category-label">Nutritional Supplements</a>
            <a href="#" class="category-label">Orthopaedic Supports</a>
            <a href="#" class="category-label">Personal Care Products</a>
            <a href="#" class="category-label">Reachers and Grabbers</a>
            <a href="#" class="category-label">Shower Chairs and Bath Seats</a>
            <a href="#" class="category-label">Wheelchair Products</a>
            <a href="#" class="category-label">Xerostomia Products</a>
            <a href="#" class="category-label">Zipper Pulls</a>
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