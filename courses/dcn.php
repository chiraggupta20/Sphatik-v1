DCN course php and css both:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCN - Course Content</title>
    <link rel="stylesheet" href="../css/dcn_styles.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
   
    <!-- Course Content -->
    <section class="course-content">
        <h2>Data Communication & Networking</h2>

        <?php
            $topics = [
                ["title" => "Introduction to DCN", "desc" => "Overview of data communication, transmission modes, and network types."],
                ["title" => "Network Models", "desc" => "OSI and TCP/IP models, comparison, and importance in networking."],
                ["title" => "Transmission Media", "desc" => "Wired (coaxial, fiber optics) and wireless (Wi-Fi, Bluetooth) media."],
                ["title" => "Network Topologies", "desc" => "Bus, star, ring, and mesh topologies and their applications."],
                ["title" => "IP Addressing & Subnetting", "desc" => "IPv4 & IPv6, subnet masks, CIDR, and IP allocation methods."],
                ["title" => "Routing Algorithms", "desc" => "Distance Vector, Link State, and Hybrid Routing protocols."],
                ["title" => "Network Security", "desc" => "Firewalls, encryption, VPNs, and cyber threats prevention."]
            ];

            foreach ($topics as $topic) {
                echo "<div class='topic'>";
                echo "<h3>{$topic['title']}</h3>";
                echo "<p>{$topic['desc']}</p>";
                echo "</div>";
            }
        ?>
    </section>

</body>
</html>