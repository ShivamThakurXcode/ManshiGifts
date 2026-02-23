<?php
/**
 * Example Usage of Product Card Component
 * 
 * Include this at the top of files where you want to use product cards:
 * <?php include 'components/product-card.php'; ?>
 */

// Example 1: Standard Add to Cart card
$image = "assets/media/products/prodduct-1.png";
$title = "Huggable Friends";
$description = "Lorem ipsum dolor sit amet...";
$price = 18.00;
$originalPrice = 20.00;
$discount = "-16%";
$rating = 4;
$reviewCount = 2;
$productLink = "product-detail.php";
$buttonType = "cart";

include 'components/product-card.php';


// Example 2: WhatsApp Inquiry card
$image = "assets/media/products/prodduct-2.png";
$title = "Another Product";
$description = "Product description here...";
$price = 25.00;
$originalPrice = null;
$discount = null;
$rating = 5;
$reviewCount = 10;
$productLink = "product-detail.php?id=2";
$buttonType = "whatsapp";
$whatsappNumber = "1234567890";
$whatsappMessage = "Hi, I'm interested in";

include 'components/product-card.php';


// Example 3: Auto-calculate discount (no discount label provided)
$image = "assets/media/products/prodduct-3.png";
$title = "Discount Product";
$description = "Description here...";
$price = 80.00;
$originalPrice = 100.00;
// $discount will be auto-calculated as "-20%"
// $buttonType defaults to "cart"

include 'components/product-card.php';
?>

<!-- 
Alternatively, you can use include directly in HTML:

<div class="row">
    <?php 
    $products = [
        [
            'image' => 'assets/media/products/prodduct-1.png',
            'title' => 'Huggable Friends',
            'description' => 'Lorem ipsum dolor sit amet...',
            'price' => 18.00,
            'originalPrice' => 20.00,
            'discount' => '-16%'
        ],
        [
            'image' => 'assets/media/products/prodduct-2.png',
            'title' => 'Product 2',
            'description' => 'Description...',
            'price' => 25.00
        ],
        // Add more products...
    ];
    
    foreach ($products as $product) {
        extract($product);
        include 'components/product-card.php';
    }
    ?>
</div>
-->
