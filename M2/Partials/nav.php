<?php
// Note: this is to resolve cookie issues with port numbers
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}
$localWorks = true; // some people have issues with localhost for the cookie params
// if you're one of those people make this false

// Check if a session is already active before starting a session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once(__DIR__ . "/../lib/functions.php");

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    echo "<p>You have been logged out</p>";
}
?>
<link rel="stylesheet" href="<?php echo('styles.css'); ?>">
<nav class="navbar">
    <ul class="navbar-menu">
        <?php if (is_logged_in()) : ?>
            <li><a href="home.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="cart.php">Cart</a></li>
        <?php endif; ?>
        <?php if (!is_logged_in()) : ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="cart.php">Cart</a></li>
        <?php endif; ?>
        <?php if (has_role('Admin')) : ?>
            <li><a href="create_role.php">Create Role</a></li>
            <li><a href="list_roles.php">List Roles</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="editproduct.php">Edit</a></li>
            <li><a href="addproduct.php">Add</a></li>
        <?php endif; ?>
        <?php if (is_logged_in()) : ?>
            <li><a href="logout.php">Logout</a></li>
        <?php endif; ?>
    </ul>
</nav>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #333;
        padding: 10px 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .navbar-menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .navbar-menu li {
        margin-right: 20px;
    }

    .navbar-menu li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .navbar-menu li a:hover {
        color: #ff9900;
    }

    /* Add some spacing for the page content so it doesn't overlap the navbar */
    body {
        padding-top: 60px;
    }
</style>
