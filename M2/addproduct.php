<?php
require(__DIR__ . "/partials/nav.php");

$message = ""; // Initialize feedback message

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $db = getDB();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve and sanitize product details from the form
        $name = htmlspecialchars(trim($_POST['name']));
        $description = htmlspecialchars(trim($_POST['description']));
        $category = htmlspecialchars(trim($_POST['category']));
        $stock = (int)$_POST['stock'];
        $price = (float)$_POST['price']; // Using 'price' instead of 'unit_price'
        $visibility = (int)$_POST['visibility'];

        // Server-side validation
        if (empty($name) || $price <= 0 || $stock < 0 || ($visibility !== 0 && $visibility !== 1)) {
            $message = "Please fill out all fields correctly.";
        } else {
            // Insert the new product into the database
            $stmt = $db->prepare("INSERT INTO products (name, description, category, stock, price, visibility) 
                                  VALUES (:name, :description, :category, :stock, :price, :visibility)"); // Changed 'unit_price' to 'price'
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":category", $category);
            $stmt->bindParam(":stock", $stock);
            $stmt->bindParam(":price", $price); // Binding 'price' instead of 'unit_price'
            $stmt->bindParam(":visibility", $visibility);
            $stmt->execute();

            $message = "Product added successfully!";
        }
    } catch (PDOException $e) {
        $message = "Error: " . htmlspecialchars($e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .container form input,
        .container form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .container form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            text-align: center;
            margin-bottom: 15px;
            color: #d9534f;
        }

        .message.success {
            color: #5cb85c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>
        
        <!-- Feedback Message -->
        <?php if (!empty($message)): ?>
            <div class="message <?php echo strpos($message, 'successfully') !== false ? 'success' : ''; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="description">Description:</label>
            <textarea name="description"></textarea>

            <label for="category">Category:</label>
            <input type="text" name="category">

            <label for="stock">Stock:</label>
            <input type="number" name="stock" value="0" min="0">

            <label for="price">Price:</label> <!-- Changed to 'price' instead of 'unit_price' -->
            <input type="number" name="price" step="0.01" min="0.01" required>

            <label for="visibility">Visibility (1 for visible, 0 for hidden):</label>
            <input type="number" name="visibility" min="0" max="1" value="1">

            <input type="submit" value="Add Product">
        </form>
    </div>
</body>
</html>
