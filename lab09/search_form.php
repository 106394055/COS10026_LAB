<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Cars</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Search Car by Model</h1>
    <form action="search_result.php" method="get">
        <label for="model">Car Model:</label>
        <input type="text" id="model" name="model" required>
        <button type="submit">Search</button>
    </form>
</body>
</html>