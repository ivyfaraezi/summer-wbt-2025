<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "product_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $showTable = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $buying = $_POST['buying'];
        $selling = $_POST['selling'];
        $profit = $_POST['selling'] - $_POST['buying'];

        $stmt = $conn->prepare("INSERT INTO products (name, buying, selling, profit) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sddd", $name, $buying, $selling, $profit);
        if ($stmt->execute()) {
            echo "Product added successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    ?>
    <h1>Add Product</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        

        <label for="buying">Buying Price:</label>
        <input type="number" id="buying" name="buying" required>
        

        <label for="selling">Selling Price:</label>
        <input type="number" id="selling" name="selling" required>
        

        <input type="checkbox" id="display" name="display">
        <label for="display">Display</label>
        

        <input type="submit" value="Save">
    </form>
    <?php
    if ((isset($_POST['display']) && $_POST['display'] == 'on') || (isset($_GET['display']) && $_GET['display'] == 'on')) {
    ?>
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Profit</th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT id, name, profit FROM products");
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['profit']) . "</td>";
                        echo "<td><a href='edit-product.html?id=" . $row['id'] . "'>Edit</a></td>";
                        echo "<td><a href='delete-product.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No products found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>
</body>
</html>