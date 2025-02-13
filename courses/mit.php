<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIT Course</title>
    <link rel="stylesheet" href="../css/mit_styles.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include '../includes/header.php'; ?>


    <!-- Course Content -->
    <div class="course-container">
        <h2 class="course-title">Microprocessor & Interfacing Technology (MIT)</h2>

        <?php
            $topics = [
                ["title" => "Introduction to Microprocessors", "desc" => "Basic concepts, history, and evolution of microprocessors."],
                ["title" => "8085 Architecture", "desc" => "Registers, ALU, control unit, and memory organization of 8085 microprocessor."],
                ["title" => "Instruction Set & Programming", "desc" => "Assembly language programming, opcode, and addressing modes."],
                ["title" => "8086 Microprocessor", "desc" => "Architecture, differences from 8085, and programming concepts."],
                ["title" => "Interrupts & Interfacing", "desc" => "Types of interrupts, I/O interfacing, and memory interfacing techniques."],
                ["title" => "Timers & Counters", "desc" => "Functionality of timers, counters, and their applications in microprocessors."],
                ["title" => "Peripheral Devices", "desc" => "Interfacing microprocessors with external devices like ADC, DAC, and LCD."]
            ];

            foreach ($topics as $topic) {
                echo "<div class='topic'>";
                echo "<h3>" . $topic["title"] . "</h3>";
                echo "<p>" . $topic["desc"] . "</p>";
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>