<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - Frequently Asked Questions</title>
    <link rel="stylesheet" href="css/faq_style.css"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>
<section class="faq">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-list">
            <?php
            $faqs = [
                "What services do you offer?" => "We offer freelance services, skill development courses, local services, and delivery partner opportunities.",
                "How can I register for a service?" => "You can register by filling out the form on the respective service page. Our team will contact you shortly.",
                "Is there any fee for freelancers to join?" => "No, freelancers can join for free and start offering their services immediately.",
                "How do I contact support?" => "You can contact our support team via email or the contact form available on our website."
            ];

            foreach ($faqs as $question => $answer) {
                echo '<div class="faq-item">';
                echo '<details>';
                echo '<summary>' . $question . '</summary>';
                echo '<p>' . $answer . '</p>';
                echo '</details>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

</body>
</html>
