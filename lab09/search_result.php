<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Search Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Search Results</h1>

    <?php
    require_once "settings.php";
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if (!$conn) {
        echo "<p>Unable to connect to the database.</p>";
    } else {
        if (isset($_GET['model']) && trim($_GET['model']) !== "") {
            $model = mysqli_real_escape_string($conn, trim($_GET['model']));
            $sql = "SELECT * FROM cars WHERE model LIKE '%$model%'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<thead>";
                echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['car_id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['make']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['model']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['price']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['yom']) . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>🚫 No matching cars found.</p>";
            }
        } else {
            echo "<p>Please enter a model to search.</p>";
        }

        mysqli_close($conn);
    }
    ?>

    <p><a href="search_form.php">Back to Search</a></p>
</body>
</html>