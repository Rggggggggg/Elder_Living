<?php 
session_start();
require '../connection/connection.php';

$username = $_SESSION['username'];
$email_phone = $_SESSION['email_phone'];
$name = $_SESSION['name'];
$gender = $_SESSION['gender'];
$dob = $_SESSION['dob'];

// Mask the email
function maskEmail($email) {
    $parts = explode("@", $email);
    $username = $parts[0];
    $domain = $parts[1];
    $visible = substr($username, 0, 2);
    $maskedUsername = $visible . str_repeat("*", strlen($username) - 2);
    return $maskedUsername . "@" . $domain;
}

$maskedEmail = maskEmail($email_phone);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $newUsername = $_POST['username']; 
  $name = $_POST['name'];            
  $gender = $_POST['gender'];        
  $day = $_POST['day'];              
  $month = $_POST['month'];          
  $year = $_POST['year'];            

  $dob = $year . '-' . $month . '-' . $day; 

 
  $userData = [
      'username' => $newUsername,
      'name' => $name,
      'gender' => $gender,
      'dob' => $dob
  ];

  // Find user with username
  $updateResult = $collection->updateOne(
      ['username' => $username], // Search by the old username
      ['$set' => $userData]      // Update the user data
  );

  if ($updateResult->getModifiedCount() > 0) {
     echo "<script>alert('Your details have been updated successfully!');</script>";
      // Update session
      $_SESSION['username'] = $newUsername;
      $_SESSION['name'] = $name;
      $_SESSION['gender'] = $gender;
      $_SESSION['dob'] = $dob;
  } else {
     echo "<script>alert('Failed to update details. Please try again.');</script>";
  } 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elder Living | Account Page</title>
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/elder-living-logo.png">
  <link rel="stylesheet" href="../../css/user-account/AccountPage.css">
  <link rel="stylesheet" href="../javascript/LandingPage.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <main class="container">
    <header class="header">
      <a href="../../html/LandingPage.php" 
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
            <a href="../../html/Logout.php" class="login_signup_link">
            <?php echo ($username); ?>
            </a>
          </div>
          <div class="cart">
            <img src="../../assets/cart-icon.png" alt="" class="cart-icon">
            <a href="../CartPage.php" class="cart_link">
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
          <a class="nav-link" href="../../html/LandingPage.php">
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
          <a class="nav-link" href="../CategoryPage.php">
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
      <article class="account-nav">
          <div class="profile">
              <img src="../../assets/profile.png" alt="Profile Picture" class="profile-pic">
              <div class="profile-info">
                  <p class="profile-name"><?php echo ($name);  ?></p>
                  <p class="profile-email"><?php echo ($maskedEmail); ?></p>
              </div>
          </div>
  
          <div class="nav-options">
              <a href="" class="nav-option personal">Personal Information</a>
              <a href="../../html/user-account/AddressPage.php" class="nav-option address">Addresses</a>
              <a href="../../html/user-account/PasswordPage.php" class="nav-option password">Password</a>
              <a href="../../html/user-account/PurchasePage.php" class="nav-option purchase">My Purchase</a>
              <a href="../logout.php" class="nav-option logout">LOGOUT</a>
          </div>
      </article>
  
      <article class="account-details">
          <div class="section profile-overview">
              <h1>My Profile</h1>
              <p>Protect your account</p>
          </div>
  
          <div class="section edit-profile">
              <h1>Edit your profile</h1>
          </div>

          <div class="profile-form">
          <form action="" method="POST" class="form">
          <div class="form-group">
    <label>Username</label>
    <input type="text" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" class="input" name="username">

</div>
<div class="form-group">
    <label>Name</label>
    <input type="text" value="<?php echo htmlspecialchars($name); ?>" class="input" name="name">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" value="<?php echo htmlspecialchars($maskedEmail); ?>" class="input" readonly>
</div>
<div class="form-group">
    <label>Phone Number</label>
    <!-- <input type="text" value="<?php echo htmlspecialchars($phone_number); ?>" class="input" name="phone_number"> !-->
</div>


  <!-- Gender Section -->
<div class="section gender-selection">
    <h1>Gender</h1>
    <div class="gender-options">
        <div class="gender-option">
            <input type="radio" name="gender" id="male" class="radio" style="height:20px; width:20px;" value="male" <?php if ($gender == 'male') echo 'checked'; ?>>
            <label for="male">Male</label>
        </div>
        <div class="gender-option">
            <input type="radio" name="gender" id="female" class="radio" style="height:20px; width:20px;" value="female" <?php if ($gender == 'female') echo 'checked'; ?>>
            <label for="female">Female</label>
        </div>
    </div>
</div>


 <!-- Date of Birth Section -->
<div class="section date-of-birth">
    <h1>Date of Birth</h1>
    <div class="date-group">
        <select id="day" name="day" class="custom-arrow" required>
            <option value="" disabled selected>Day</option>
            <?php 
                $dobArray = explode("-", $dob); 
                $storedDay = isset($dobArray[2]) ? $dobArray[2] : '';
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i' " . ($i == $storedDay ? 'selected' : '') . ">$i</option>";
                }
            ?>
        </select>
    </div>
    <div class="date-group">
        <select id="month" name="month" class="custom-arrow" required>
            <option value="" disabled selected>Month</option>
            <?php 
                $storedMonth = isset($dobArray[1]) ? $dobArray[1] : '';
                $months = [
                    "1" => "January", "2" => "February", "3" => "March", "4" => "April", "5" => "May", "6" => "June",
                    "7" => "July", "8" => "August", "9" => "September", "10" => "October", "11" => "November", "12" => "December"
                ];
                foreach ($months as $key => $month) {
                    echo "<option value='$key' " . ($key == $storedMonth ? 'selected' : '') . ">$month</option>";
                }
            ?>
        </select>
    </div>
    <div class="date-group">
        <select id="year" name="year" class="custom-arrow" required>
            <option value="" disabled selected>Year</option>
            <?php 
                $storedYear = isset($dobArray[0]) ? $dobArray[0] : '';
                $currentYear = date("Y");
                for ($i = $currentYear; $i >= 1900; $i--) {
                    echo "<option value='$i' " . ($i == $storedYear ? 'selected' : '') . ">$i</option>";
                }
            ?>
        </select>
    </div>
</div>


  <div class="section save-changes">
      <button type="submit" class="save-btn">Save Changes</button>
  </div>
</form>

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

