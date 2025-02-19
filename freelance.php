<?php
$tabs = [
    "ongoing" => [
        "title" => "Ongoing Projects",
        "data" => [
            ["Website Development", "2025-03-10"],
            ["Mobile App Design", "2025-04-01"]
        ],
        "headers" => ["Name", "Deadline"]
    ],
    "available" => [
        "title" => "Available Projects",
        "data" => [
            ["<a href='#'>Logo Design</a>", "$200"],
            ["<a href='#'>SEO Optimization</a>", "$150"]
        ],
        "headers" => ["Name", "Budget"]
    ],
    "completed" => [
        "title" => "Completed Projects",
        "data" => [
            ["<a href='#'>E-commerce Platform</a>", "2024-12-20"],
            ["<a href='#'>Portfolio Website</a>", "2024-11-15"]
        ],
        "headers" => ["Name", "Completed On"]
    ]
];

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'ongoing';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Dashboard</title>
    <link rel="stylesheet" href="./css/freelance_styles.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .add-project-btn {
            display: block;
            width: 100%;
            max-width: 300px;
            margin: 20px auto;
            padding: 12px;
            background-color: #6a0dad;
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        .add-project-btn:hover {
            background-color: #5a0ca0;
        }
    </style>
</head>
<body>
    <?php include './includes/header.php'; ?>

    <aside class="sidebar">
        <h1>Freelancer Dashboard</h1>
        <div class="tabs">
            <a href="?tab=ongoing" class="tab <?php echo $activeTab === 'ongoing' ? 'active' : ''; ?>">Ongoing Projects</a>
            <a href="?tab=available" class="tab <?php echo $activeTab === 'available' ? 'active' : ''; ?>">Available Projects</a>
            <a href="?tab=completed" class="tab <?php echo $activeTab === 'completed' ? 'active' : ''; ?>">Completed Projects</a>
        </div>
    </aside>
    <main class="content">
        <?php
        if (isset($tabs[$activeTab])) {
            $tab = $tabs[$activeTab];
            echo "<div class='card tab-content active'>";
            echo "<h2>{$tab['title']}</h2>";
            echo "<table><tr>";
            foreach ($tab['headers'] as $header) {
                echo "<th>$header</th>";
            }
            echo "</tr>";
            foreach ($tab['data'] as $row) {
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            
            // Add Project Button for Completed Projects
            if ($activeTab === 'completed') {
                //echo "<button href=faq.php class='add-project-btn'>Add a Completed Project</button>";
                echo "<a href='addprojectbutton.php' class='add-project-btn'>Add a Completed Project</a>";

            }

            echo "</div>";
        } else {
            echo "<div class='card tab-content active'><h2>Invalid Tab</h2><p>The selected tab does not exist.</p></div>";
        }
        ?>
    </main>
</body>
</html>
