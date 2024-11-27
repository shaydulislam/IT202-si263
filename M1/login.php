<?php
// Include navigation and database connection
require(__DIR__ . "/partials/nav.php");
require_once(__DIR__ . '/Lib/db.php');

// Start session to store user data
session_start();
?>

<!-- HTML Form for Login -->
<form onsubmit="return validate(this)" method="POST">
   <div>
       <label for="email">Email</label>
       <input type="email" name="email" required />
   </div>
   <div>
       <label for="pw">Password</label>
       <input type="password" id="pw" name="password" required minlength="8" />
   </div>
   <input type="submit" value="Login" />
</form>

<script>
   function validate(form) {
       // Basic JavaScript validation (additional validation can be added if needed)
       return true;
   }
</script>

<?php
if (isset($_POST["email"]) && isset($_POST["password"])) {
   $email = htmlspecialchars(trim($_POST["email"])); // Sanitize email input
   $password = $_POST["password"]; // Password doesn't need trimming or escaping

   // Server-side validation
   $hasError = false;
   if (empty($email)) {
       echo "<script>alert('Email must not be empty');</script>";
       $hasError = true;
   }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script>alert('Invalid email address');</script>";
       $hasError = true;
   }
   if (empty($password)) {
       echo "<script>alert('Password must not be empty');</script>";
       $hasError = true;
   }
   if (strlen($password) < 8) {
       echo "<script>alert('Password too short');</script>";
       $hasError = true;
   }

   if (!$hasError) {
       try {
           $db = getDB(); // Get database connection
           $stmt = $db->prepare("SELECT id, email, password FROM Users WHERE email = :email");
           $stmt->execute([":email" => $email]);
           $user = $stmt->fetch();

           if ($user && password_verify($password, $user["password"])) {
               echo "<script>alert('Welcome $email');</script>";
              
               // Store user data in session
               $_SESSION["user"] = $user;

               // Retrieve roles for the user
               $stmt = $db->prepare("SELECT Roles.name FROM Roles
                   JOIN UserRoles ON Roles.id = UserRoles.role_id
                   WHERE UserRoles.user_id = :user_id AND Roles.is_active = 1 AND UserRoles.is_active = 1");
               $stmt->execute([":user_id" => $user["id"]]);
               $roles = $stmt->fetchAll();

               // Store roles in session
               $_SESSION["user"]["roles"] = $roles ?: []; // Default to empty array if no roles

               echo "<script>location.href='home.php';</script>"; // Redirect to home page
           } else {
               echo "<script>alert('Invalid email or password');</script>";
           }
       } catch (Exception $e) {
           error_log("Error: " . $e->getMessage());
           echo "<script>alert('An error occurred. Please try again later.');</script>";
       }
   }
}
?>

<!-- Styling for the page -->
<style>
   /* Import Google Font for a modern look */
   @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

   /* General reset */
   * {
       box-sizing: border-box;
       margin: 0;
       padding: 0;
   }

   /* Body styling */
   body {
       font-family: 'Roboto', sans-serif;
       background-color: #f0f2f5;
       display: flex;
       align-items: center;
       justify-content: center;
       height: 100vh;
       margin: 0;
   }

   /* Navigation bar styling */
   nav {
       background-color: #0044cc;
       padding: 15px;
       display: flex;
       justify-content: center;
       border-radius: 8px;
       margin-bottom: 20px;
   }

   nav a {
       color: #ffffff;
       text-decoration: none;
       margin: 0 15px;
       font-weight: 500;
       font-size: 16px;
       transition: color 0.3s;
   }

   nav a:hover {
       color: #dddddd;
   }

   /* Form container */
   form {
       background-color: #ffffff;
       padding: 25px;
       border-radius: 10px;
       box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
       width: 350px;
       display: flex;
       flex-direction: column;
       gap: 15px;
   }

   label {
       font-size: 14px;
       color: #333333;
       margin-bottom: 5px;
   }

   input[type="email"],
   input[type="password"] {
       width: 100%;
       padding: 10px;
       border: 1px solid #dddddd;
       border-radius: 5px;
       font-size: 14px;
       transition: border-color 0.3s;
   }

   input[type="email"]:focus,
   input[type="password"]:focus {
       border-color: #4caf50;
       outline: none;
   }

   /* Submit button */
   input[type="submit"] {
       background-color: #007bff;
       color: #ffffff;
       padding: 12px;
       border: none;
       border-radius: 5px;
       font-size: 16px;
       cursor: pointer;
       transition: background-color 0.3s;
   }

   input[type="submit"]:hover {
       background-color: #0056b3;
   }

   .error {
       color: #d9534f;
       font-size: 13px;
       margin-bottom: 10px;
   }
</style>
