<?php
/**
 * Product Data for the Shop
 * 
 * This file contains all product data used across the platform.
 * Use this data with the product-card component for consistent rendering.
 * 
 * @array $products - Array of product information
 */

$products = [
    // Featured Products (index.php first section)
    [
        'id' => 1,
        'image' => 'assets/media/products/prodduct-1.png',
        'title' => 'Huggable Friends',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum.',
        'price' => 18.00,
        'originalPrice' => 20.00,
        'discount' => '-16%',
        'rating' => 4,
        'reviewCount' => 2,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 2,
        'image' => 'assets/media/products/prodduct-2.png',
        'title' => 'Plush Soft Toy',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum.',
        'price' => 25.00,
        'originalPrice' => null,
        'discount' => null,
        'rating' => 5,
        'reviewCount' => 4,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 3,
        'image' => 'assets/media/products/prodduct-3.png',
        'title' => 'Cute Teddy Bear',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum.',
        'price' => 30.00,
        'originalPrice' => null,
        'discount' => null,
        'rating' => 4,
        'reviewCount' => 3,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 4,
        'image' => 'assets/media/products/prodduct-4.png',
        'title' => 'Baby Toy Set',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum.',
        'price' => 15.00,
        'originalPrice' => null,
        'discount' => null,
        'rating' => 3,
        'reviewCount' => 5,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 5,
        'image' => 'assets/media/products/prodduct-5.png',
        'title' => 'Wooden Toy Car',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum.',
        'price' => 22.00,
        'originalPrice' => 28.00,
        'discount' => '-21%',
        'rating' => 5,
        'reviewCount' => 8,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 6,
        'image' => 'assets/media/products/prodduct-6.png',
        'title' => 'Building Blocks',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum.',
        'price' => 35.00,
        'originalPrice' => null,
        'discount' => null,
        'rating' => 4,
        'reviewCount' => 6,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 7,
        'image' => 'assets/media/products/prodduct-7.png',
        'title' => 'Interactive Robot',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum.',
        'price' => 45.00,
        'originalPrice' => 60.00,
        'discount' => '-25%',
        'rating' => 4,
        'reviewCount' => 12,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 8,
        'image' => 'assets/media/products/prodduct-8.png',
        'title' => 'Soft Doll',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum.',
        'price' => 20.00,
        'originalPrice' => null,
        'discount' => null,
        'rating' => 5,
        'reviewCount' => 7,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    
    // Arrival Products (with WhatsApp button type)
    [
        'id' => 9,
        'image' => 'assets/media/products/arrival-1.png',
        'title' => 'New Arrival Toy 1',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'price' => 28.00,
        'originalPrice' => null,
        'discount' => null,
        'rating' => 4,
        'reviewCount' => 3,
        'productLink' => 'product-detail.php',
        'buttonType' => 'whatsapp',
        'whatsappNumber' => '1234567890',
        'whatsappMessage' => 'Hello, I am interested in this new arrival product'
    ],
    [
        'id' => 10,
        'image' => 'assets/media/products/arrival-2.png',
        'title' => 'New Arrival Toy 2',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'price' => 32.00,
        'originalPrice' => 40.00,
        'discount' => '-20%',
        'rating' => 5,
        'reviewCount' => 5,
        'productLink' => 'product-detail.php',
        'buttonType' => 'whatsapp',
        'whatsappNumber' => '1234567890',
        'whatsappMessage' => 'Hello, I am interested in this new arrival product'
    ],
    [
        'id' => 11,
        'image' => 'assets/media/products/arrival-3.png',
        'title' => 'New Arrival Toy 3',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'price' => 18.00,
        'originalPrice' => null,
        'discount' => null,
        'rating' => 4,
        'reviewCount' => 2,
        'productLink' => 'product-detail.php',
        'buttonType' => 'whatsapp',
        'whatsappNumber' => '1234567890',
        'whatsappMessage' => 'Hello, I am interested in this new arrival product'
    ],
    
    // Shop Products
    [
        'id' => 12,
        'image' => 'assets/media/products/prodduct-9.png',
        'title' => 'Educational Toy',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque.',
        'price' => 40.00,
        'originalPrice' => 50.00,
        'discount' => '-20%',
        'rating' => 4,
        'reviewCount' => 10,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 13,
        'image' => 'assets/media/products/prodduct-10.png',
        'title' => 'Music Toy Piano',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque.',
        'price' => 55.00,
        'originalPrice' => null,
        'discount' => null,
        'rating' => 5,
        'reviewCount' => 15,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 14,
        'image' => 'assets/media/products/prodduct-11.png',
        'title' => 'Art Set for Kids',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque.',
        'price' => 25.00,
        'originalPrice' => 30.00,
        'discount' => '-17%',
        'rating' => 4,
        'reviewCount' => 8,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
    [
        'id' => 15,
        'image' => 'assets/media/products/prodduct-12.png',
        'title' => 'Remote Control Car',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque.',
        'price' => 65.00,
        'originalPrice' => 80.00,
        'discount' => '-19%',
        'rating' => 5,
        'reviewCount' => 20,
        'productLink' => 'product-detail.php',
        'buttonType' => 'cart'
    ],
];

// Featured products for homepage (first 8 products)
$featuredProducts = array_slice($products, 0, 8);

// Arrival products for homepage (products 9-11)
$arrivalProducts = array_slice($products, 8, 3);

// All products for shop page
$allProducts = $products;
