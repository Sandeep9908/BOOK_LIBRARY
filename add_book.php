<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .back_to_home {
            display: inline-block;
            margin-top: 20px;
            margin-left: 45%;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .back_to_home:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<div class="container">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $author = $conn->real_escape_string($_POST['author']);
    $category = $conn->real_escape_string($_POST['category']);
    $borrowed = $conn->real_escape_string($_POST['borrowed']);

    // Check if the book already exists
    $check_sql = "SELECT * FROM books WHERE title='$title' AND author='$author' AND category='$category'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        echo "<h1 style='font-size: 20px;'>The book is already present in the library.<br></h1>";
    } else {
        // Insert new book
        $insert_sql = "INSERT INTO books (title, author, category, borrowed) VALUES ('$title', '$author', '$category', '$borrowed')";
        if ($conn->query($insert_sql) === TRUE) {
            echo "<h1 style='font-size: 20px;'>New book added successfully.<br></h1>";
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error . "<br>";
        }
    }

    $conn->close();
}
?>
</div>
<a href="book_library.php" class="back_to_home">Back to Home</a>
</body>
</html>

