
<?php 

$pageTitle = 'Menu';

$pageKay = 'menu';

$headerImg = 'image/our-mission-header.jpg';

include 'inc/header.inc.php'; 


?>

<div class="menu-container">

        <h2>Our Menu</h2>

        <!-- Starters Section -->
        <section class="menu-section">
            <h3>Starters</h3>
            <div class="menu-item">
                <img src="image/garlic-bread.jpg" alt="Garlic Bread">
                <span>Garlic Bread</span>
                <span class="price">$5.99</span>
            </div>
            <div class="menu-item">
                <img src="image/tomato-soup.jpg" alt="Tomato Soup">
                <span>Tomato Soup</span>
                <span class="price">$6.99</span>
            </div>
            <div class="menu-item">
                <img src="image/caesar-salad.jpg" alt="Caesar Salad">
                <span>Caesar Salad</span>
                <span class="price">$7.99</span>
            </div>
        </section>

        <!-- Main Course Section -->
        <section class="menu-section">
            <h3>Main Course</h3>
            <div class="menu-item">
                <img src="image/grilled-salmon.jpg" alt="Grilled Salmon">
                <span>Grilled Salmon</span>
                <span class="price">$14.99</span>
            </div>
            <div class="menu-item">
                <img src="image/beef-steak.jpg" alt="Beef Steak">
                <span>Beef Steak</span>
                <span class="price">$19.99</span>
            </div>
            <div class="menu-item">
                <img src="image/vegetarian-pasta.jpg" alt="Vegetarian Pasta">
                <span>Vegetarian Pasta</span>
                <span class="price">$12.99</span>
            </div>
        </section>

        <!-- Desserts Section -->
        <section class="menu-section">
            <h3>Desserts</h3>
            <div class="menu-item">
                <img src="image/chocolate-cake.jpg" alt="Chocolate Cake">
                <span>Chocolate Cake</span>
                <span class="price">$6.99</span>
            </div>
            <div class="menu-item">
                <img src="image/fruit-tart.jpg" alt="Fruit Tart">
                <span>Fruit Tart</span>
                <span class="price">$5.99</span>
            </div>
            <div class="menu-item">
                <img src="image/ice-cream-sundae.jpg" alt="Ice Cream Sundae">
                <span>Ice Cream Sundae</span>
                <span class="price">$4.99</span>
            </div>
        </section>

        </div>
   
        <?php include 'inc/footer.inc.php'; ?>

</body>
</html>
