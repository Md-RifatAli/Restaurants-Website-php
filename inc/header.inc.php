<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style-1.css">
    <link rel="stylesheet" href="">    
    <title>Restaurants &bull; <?php echo $pageTitle; ?></title>
</head>
<body>
    <!-- header section start here -->
    <header class="header-with-background" style="background-image: url('<?php echo $headerImg; ?>');">
     <h1>Rifat Restaurants</h1>

     <p>Delicious food made with love</p>
        
 <nav>
    <a href="our-mission.php" class="<?php echo (!empty($pageKay) && $pageKay === 'mission') ? 'active' : ''; ?>">Our mission</a>

    <a href="ingredients.php" class="<?php echo (!empty($pageKay) && $pageKay === 'ingredients') ? 'active' : ''; ?>">Ingredients</a>

    <a href="menu.php" class="<?php echo (!empty($pageKay) && $pageKay === 'menu') ? 'active' : ''; ?>">Menu</a>
</nav>

    </header>

    <!-- header section ends here -->


    <!-- Main section start here -->

    <main>