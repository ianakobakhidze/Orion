<?php
include "functions.php";
include "data.php";
include "components.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orion</title>
    <link rel="icon" href="pictures/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
</head>
<body>

   
    <?php render_header($headerData);?>
    <?php render_about($aboutData);?>
    <?php render_underline($underlineData);?>
    <?php render_hero($heroData);?>
    <?php render_courses($coursesData);?>
    <?php render_cta($ctaData);?>
    <?php render_thank_you();?>
    <?php render_line();?>
    <?php render_why_choose($whyChooseData);?>
    <?php render_mission($missionData);?>
    <div class="container page-content">
    <?php render_page_hero('Get in Touch', 'We\'d love to hear from you. Reach out and we\'ll be in touch shortly.'); ?>
    <?php render_contact_section($contactData); ?>
    <?php getTutorsSection($tutors); ?>
    <?php render_contact_script();?>
    <?php render_footer(); ?> 


    
</body>
</html>
