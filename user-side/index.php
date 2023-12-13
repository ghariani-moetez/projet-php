<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #555;
            padding: 10px;
        }

        nav a {
            color: #fff;
            margin-right: 20px;
            text-decoration: none;
        }

        .container {
            padding: 20px;
        }

        .gallery-container {
            overflow-x: auto;
        }

        .gallery {
            display: flex;
            flex-wrap: nowrap; /* Prevent wrapping to the next line */
            justify-content: space-around;
            margin-top: 20px;
            padding-bottom: 20px; 
        }

        .gallery img {
            width: 300px;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Home</h1>
    </header>

    <nav>
        <a href="indexCatalogueClient.php">Catalogue view</a>
        <a href="logadmin.php">Login</a>
    
    </nav>

    <div class="container">
        <h2>Welcome to Casanova</h2>

       
        <div class="gallery-container">
            <div class="gallery">
                <img src="image1.jpg" alt="Image 1" style="border-radius: 10px;">
                <img src="image2.jpg" alt="Image 2" style="border-radius: 10px;">
            
            </div>
        </div>
    </div>
</body>
</html>
