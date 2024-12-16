<?php
require(__DIR__ . "/partials/nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Inline styling for simplicity, but move to styles.css in production */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 60px; /* Moved down by 1 inch */
            color: #007bff;
        }
        .welcome-message {
            text-align: center;
            margin: 20px 0;
        }
        .debug-info {
            margin: 20px auto;
            padding: 10px;
            max-width: 600px;
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }
        .debug-info button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }
        .debug-info button:hover {
            background: #0056b3;
        }
        .debug-info pre {
            display: none;
            margin-top: 10px;
            background: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <h1>Home</h1>
    <div class="welcome-message">
        <?php
        if (is_logged_in()) {
            echo "<p>Welcome, <strong>" . htmlspecialchars(get_user_email()) . "</strong></p>";
        } else {
            echo "<p>You're not logged in. <a href='login.php'>Log in here</a>.</p>";
        }

        // Display role check if Admin
        if (has_role('Admin')) {
            echo "<p>You have Admin privileges.</p>";
        }
        ?>
    </div>
    <div class="debug-info">
        <button onclick="toggleDebug()">Toggle Debug Info</button>
        <pre id="debug-content">
            <?php echo htmlspecialchars(var_export($_SESSION, true)); ?>
        </pre>
    </div>
    <script>
        // Toggle visibility of debug info
        function toggleDebug() {
            const debugContent = document.getElementById('debug-content');
            debugContent.style.display = debugContent.style.display === 'block' ? 'none' : 'block';
        }
    </script>
</body>
</html>
