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
    <?php render_contact_section($contactData); ?>
    <?php render_contact_script();?>
    <?php render_footer(); ?> 
