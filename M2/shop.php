<?php
require(__DIR__ . "/partials/nav.php");

// Ensure user is logged in
session_start();
$isLoggedIn = isset($_SESSION['user_id']); // Example of session check (adjust according to your login logic)

try {
    // Connect to the database
    $db = getDB();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch distinct categories from the database
    $categoryStmt = $db->prepare("SELECT DISTINCT category FROM products");
    $categoryStmt->execute();
    $categories = $categoryStmt->fetchAll(PDO::FETCH_COLUMN);

    // Check if a category filter is applied
    $selectedCategory = $_GET['category'] ?? null;

    // Check if a price sort is applied
    $selectedSort = $_GET['sort'] ?? null;

    // Construct the SQL query based on selected category and sort
    $sql = "SELECT * FROM products WHERE visibility = 1"; // Only show visible products
    $params = [];

    if ($selectedCategory) {
        $sql .= " AND category = :category";
        $params[':category'] = $selectedCategory;
    }

    if ($selectedSort === 'price_asc') {
        $sql .= " ORDER BY price ASC";
    } elseif ($selectedSort === 'price_desc') {
        $sql .= " ORDER BY price DESC";
    }

    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "<p>Connection failed: " . htmlspecialchars($e->getMessage()) . "</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .page-title {
            text-align: center;
            color: #007bff;
            margin-top: 60px; /* Added to bring the title down by 1 inch */
        }
        .filter-form, .product-list, form {
            max-width: 800px;
            margin: 20px auto;
            padding: 10px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .filter-form select, .filter-form button, form input, form button {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .product-card {
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 10px;
            border-radius: 8px;
            background: #f9f9f9;
        }
        .product-card h3 {
            margin: 0 0 10px;
            color: #333;
        }
        .product-card p {
            margin: 5px 0;
        }
        .product-card a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }
        .product-card a:hover {
            text-decoration: underline;
        }
        .add-product-btn {
            display: inline-block;
            margin: 10px auto;
            padding: 10px 15px;
            background: #28a745;
            color: #fff;
            text-align: center;
            border-radius: 4px;
            text-decoration: none;
        }
        .add-product-btn:hover {
            background: #218838;
        }
        .edit-product {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #ffc107;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .edit-product:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>

<h1 class="page-title">Shop</h1>

<!-- Add Product Button -->
<a href="addproduct.php" class="add-product-btn">Add Product</a>

<!-- Filter & Sort Form -->
<form method="GET" class="filter-form">
    <label for="category">Filter by Category:</label>
    <select name="category" id="category">
        <option value="">All Categories</option>
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo htmlspecialchars($category); ?>" 
                <?php echo ($selectedCategory === $category) ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($category); ?>
            </option>
        <?php endforeach; ?>
    </select>
    
    <label for="sort">Sort by Price:</label>
    <select name="sort" id="sort">
        <option value="">No Sorting</option>
        <option value="price_asc" <?php echo ($selectedSort === 'price_asc') ? 'selected' : ''; ?>>
            Price Low to High
        </option>
        <option value="price_desc" <?php echo ($selectedSort === 'price_desc') ? 'selected' : ''; ?>>
            Price High to Low
        </option>
    </select>
    <button type="submit">Filter & Sort</button>
</form>

<!-- Product List -->
<?php if (!empty($products)): ?>
    <div class="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <h3><?php echo htmlspecialchars($product['name'] ?? 'Unknown Product'); ?></h3>
                <p>Category: <?php echo htmlspecialchars($product['category'] ?? 'No Category'); ?></p>
                <p>Price: $<?php echo htmlspecialchars($product['price'] ?? '0.00'); ?></p>
                <a href="productdetail.php?id=<?php echo urlencode($product['id']); ?>">More Info</a>
                <?php if ($isLoggedIn): ?>
                    <a href="cart.php?action=add&product_id=<?php echo urlencode($product['id']); ?>&name=<?php echo urlencode($product['name']); ?>&price=<?php echo urlencode($product['price']); ?>">Add to Cart</a>
                <?php else: ?>
                    <a href="login.php" style="color: red;">Please login to add to cart</a>
                <?php endif; ?>
                <a href="editproduct.php?id=<?php echo urlencode($product['id']); ?>" class="edit-product">Edit</a> <!-- Edit Button -->
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No products found for the selected filters.</p>
<?php endif; ?>

</body>
</html>
