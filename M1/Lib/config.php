<?php

// Attempt to load environment variables from a .env file
$ini = @parse_ini_file(".env");

// Initialize $db_url as an empty array to avoid undefined variable issues
$db_url = [];

if ($ini && isset($ini["DB_URL"])) {
    // Load local .env file if available
    $url = $ini["DB_URL"];
} else {
    // Load from environment variables (e.g., on Heroku or other cloud services)
    $url = getenv("DB_URL");
}

// Parse the database URL to extract connection parameters
if ($url) {
    $db_url = parse_url($url);

    // Handle cases where parse_url may not work correctly (e.g., special characters in the URL)
    if (!$db_url || count($db_url) === 0) {
        $pattern = "/mysql:\/\/([^:]+):([^@]+)@([^:]+):(\d+)\/(\w+)/";
        if (preg_match($pattern, $url, $matches)) {
            $db_url = [
                "user" => $matches[1],
                "pass" => $matches[2],
                "host" => $matches[3],
                "port" => $matches[4],
                "path" => "/" . $matches[5]
            ];
        }
    }
}

// Check if the database URL was successfully parsed
if (empty($db_url)) {
    error_log("Failed to load environment variables.");
    throw new Exception("Config parsing error. Ensure your .env file or environment variables are properly set.");
} else {
    // Set database connection parameters
    $dbhost = $db_url["host"];
    $dbuser = $db_url["user"];
    $dbpass = $db_url["pass"];
    $dbdatabase = ltrim($db_url["path"], "/"); // Remove the leading slash from the path to get the database name
    $dbport = isset($db_url["port"]) ? $db_url["port"] : 3306; // Default to port 3306 if not specified
}

// Optional: Log the connection parameters for debugging (remove this in production)
error_log("Database connection details: host=$dbhost, db=$dbdatabase, user=$dbuser");

// Now you can use these variables to establish a database connection, for example:
try {
    $dsn = "mysql:host=$dbhost;port=$dbport;dbname=$dbdatabase;charset=utf8mb4";
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_log("Database connection established successfully.");
} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    throw new Exception("Error connecting to database, see logs for details.");
}

?>
