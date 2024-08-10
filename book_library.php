<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Library</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f4f4f9; 
            color: #333; 
            margin: 0; 
            padding: 0;
        }
        .container { 
            max-width: 800px; 
            margin: 30px auto; 
            padding: 20px; 
            background-color: #fff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            border-radius: 8px;
        }
        h1, h2 { 
            color: #4CAF50; 
        }
        input, button { 
            width: calc(100% - 22px); 
            padding: 10px; 
            margin: 10px 0; 
            border-radius: 5px; 
            border: 1px solid #ddd; 
            box-sizing: border-box;
        }
        button { 
            background-color: #4CAF50; 
            color: #fff; 
            border: none; 
            cursor: pointer; 
            transition: background-color 0.3s;
        }
        button:hover { 
            background-color: #45a049; 
        }
        a { 
            color: #4CAF50; 
            text-decoration: none; 
        }
        a:hover { 
            text-decoration: underline; 
        }
        form { 
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Book Library</h1>

        <h2>Search Books</h2>
        <form action="search_books.php" method="get">
            <input type="text" name="search" placeholder="Search by title, author, or category" required>
            <button type="submit">Search</button>
        </form>

        <h2>Add a Book</h2>
        <form action="add_book.php" method="post">
            <input type="text" name="title" placeholder="Title" required>
            <input type="text" name="author" placeholder="Author" required>
            <input type="text" name="category" placeholder="Category" required>
            <input type="text" name="borrowed" placeholder="Borrowed (Yes/No)" required>
            <button type="submit">Add Book</button>
        </form>

        <h2>View Books</h2>
        <a href="list_books.php">View all books</a>
    </div>
</body>
</html>
