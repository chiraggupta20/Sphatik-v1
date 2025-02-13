<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Catering</title>
    <style>
        /* ... other styles (container, grid, etc.) ... */

        nav {
            background-color:rgba(253, 253, 253, 0.37); /* Purple navigation bar */
            padding: 10px;
            text-align: right; /* Center the links */
        }
    .logo {
    display: flex; /* Use flexbox for alignment */
    align-items: center; /* Vertically align image and text */
    margin-right:80%; /* Space on the left */
}
.logo-text {
    font-weight: bold;
    font-size: 150%;
    color: #6d28d9; /* Or your preferred color */
}
       nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav li {
            display: inline;
            margin: 0 15px; /* Add some space between links */
        }

        nav a {
            color: #6d28d9; /* White link color */
            text-decoration: none; /* Remove underlines */
            padding: 8px 16px; /* Add some padding around the links */
            border-radius: 5px; /* Rounded corners for the links */
            transition: background-color 0.3s ease; /* Smooth hover effect */
        }

        nav a:hover {
            background-color:rgb(163, 80, 247); /* Darker purple on hover */
        }


        header {
            background-color: #f0f0f0; /* Light gray header background */
            padding: 20px;
            text-align: center;
        }

        header h1 {
            color: #6d28d9; /* Purple heading */
        }

        /* ... other styles ... */
    </style>
</head>
<body>
    <header>
        <nav> 
            <div class="logo"> 
                <span class="logo-text">Sphatik</span>
            </div>
        </nav>
        <h1>Delicious Catering</h1>
        <p>Your perfect event starts with our exquisite food.</p>
    </header>

    <div class="container">
        </div>

</body>
</html>
<head>
    <style>
        /* ... (other styles) ... */

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Combined Styling for Services and Menu */
        #services, #menu {
            text-align: center;
            background-color: #6d28d9;
            color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px; /* Space between sections */
        }

        #services h2, #menu h2 {
            margin-bottom: 30px;
            font-size: 2em;
        }

        #services h3, #menu h3 {
            color: white;
            margin-top: 30px;
            font-size: 1.5em;
            border-bottom: 2px solid white;
            padding-bottom: 10px;
        }

        /* Grid for Services and Menu Categories (same structure) */
        .grid-container { /* Common class for both */
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .grid-item { /* Common class for service boxes and menu categories */
            background-color: #5a189a;
            border-radius: 8px;
            padding: 20px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .grid-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(255, 255, 255, 0.97);
            background-color:rgb(194, 31, 235);
        }

        .grid-item ul {  /* Styles for menu lists */
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .grid-item li { /* Styles for menu items */
            margin-bottom: 10px;
        }

        .grid-item p { /* Styles for service descriptions */
            color: #eee;
        }

        /* ... (other styles) ... */
    </style>
</head>
<body>
    <div class="container">
        <section id="services">
            <h2>Our Services</h2>
            <div class="grid-container">  <div class="grid-item">  <h3>Wedding Catering</h3>
                    <p>Elegant menus tailored to your special day.</p>
                </div>
                <div class="grid-item">  <h3>Corporate Events</h3>
                    <p>Impress your clients with our professional catering.</p>
                </div>
                <div class="grid-item">  <h3>Private Parties</h3>
                    <p>Delicious food for any occasion.</p>
                </div>
            </div>
        </section>

               
            </div>
        </section>
    </div>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    </head>
<body>
    <section id="menu">
        <h2>Our Menu</h2>
        <div class="grid-container">
            <?php
            $menu = array(
                "Appetizers" => array(
                    "Bruschetta" => "Toasted bread topped with tomatoes, basil, and balsamic glaze.",
                    "Mini Quiches" => "Flaky pastry filled with savory egg custard and various fillings.",
                    "Spring Rolls" => "Crispy rolls filled with fresh vegetables and served with dipping sauce."
                ),
                "Main Courses" => array(
                    "Grilled Salmon" => "Fresh salmon fillet grilled to perfection and served with your choice of sides.",
                    "Roast Chicken" => "Tender and juicy roast chicken seasoned with herbs and spices.",
                    "Vegetarian Pasta" => "Pasta tossed with seasonal vegetables and a flavorful sauce."
                ),
                "Desserts" => array(
                    "Chocolate Cake" => "Rich and decadent chocolate cake with a creamy frosting.",
                    "Fruit Tart" => "Sweet pastry crust filled with fresh seasonal fruits and a light glaze.",
                    "Ice Cream" => "Assorted flavors of creamy and refreshing ice cream."
                )
            );

            foreach ($menu as $category => $items) {
                echo "<div class='grid-item'>";
                echo "<h3>" . $category . "</h3>";
                echo "<ul>";
                foreach ($items as $item => $description) { // Loop through items and descriptions
                    echo "<li><strong>" . $item . "</strong> - " . $description . "</li>"; // Display item and description
                }
                echo "</ul>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    </body>
    <footer>
        <p>&copy; 2023 Delicious Catering</p>
    </footer>
</html>