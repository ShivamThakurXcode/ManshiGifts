<?php
/**
 * Product Render Helper Functions
 * 
 * Helper functions to render products using the product-card component.
 * Include this file after product-card.php to use the render functions.
 * 
 * Usage:
 *   include 'components/product-card.php';
 *   include 'components/render-products.php';
 *   render_product($product);                    // Single product
 *   render_product_grid($products);              // Grid of products
 *   render_featured_products();                  // Featured products from data/products.php
 *   render_arrival_products();                   // Arrival products from data/products.php
 *   render_all_products();                       // All products from data/products.php
 */

/**
 * Render a single product card
 * 
 * @param array $product - Product data array with keys: image, title, description, price, etc.
 */
function render_product($product) {
    // Extract all product variables for use in the component
    extract($product);
    
    // Include the product card component
    include dirname(__FILE__) . '/product-card.php';
}

/**
 * Render a grid of product cards
 * 
 * @param array $products - Array of product data arrays
 * @param int $columns - Number of columns in the grid (default: 4)
 */
function render_product_grid($products, $columns = 4) {
    $col_class = '';
    switch($columns) {
        case 2:
            $col_class = 'col-lg-6 col-md-6 col-sm-6';
            break;
        case 3:
            $col_class = 'col-lg-4 col-md-6 col-sm-6';
            break;
        case 4:
        default:
            $col_class = 'col-xl-3 col-lg-4 col-md-6 col-sm-6';
            break;
    }
    ?>
    <div class="row">
        <?php foreach ($products as $product): ?>
        <div class="<?php echo $col_class; ?>">
            <?php render_product($product); ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Render featured products from data/products.php
 * Uses the $featuredProducts array if available
 */
function render_featured_products() {
    global $featuredProducts;
    
    if (empty($featuredProducts)) {
        // Try to include the data file
        $data_file = dirname(__FILE__, 2) . '/data/products.php';
        if (file_exists($data_file)) {
            include $data_file;
        }
    }
    
    if (!empty($featuredProducts)) {
        render_product_grid($featuredProducts, 4);
    }
}

/**
 * Render arrival products from data/products.php
 * Uses the $arrivalProducts array if available
 */
function render_arrival_products() {
    global $arrivalProducts;
    
    if (empty($arrivalProducts)) {
        // Try to include the data file
        $data_file = dirname(__FILE__, 2) . '/data/products.php';
        if (file_exists($data_file)) {
            include $data_file;
        }
    }
    
    if (!empty($arrivalProducts)) {
        render_product_grid($arrivalProducts, 4);
    }
}

/**
 * Render all products from data/products.php
 * Uses the $allProducts array if available
 */
function render_all_products() {
    global $allProducts;
    
    if (empty($allProducts)) {
        // Try to include the data file
        $data_file = dirname(__FILE__, 2) . '/data/products.php';
        if (file_exists($data_file)) {
            include $data_file;
        }
    }
    
    if (!empty($allProducts)) {
        render_product_grid($allProducts, 4);
    }
}

/**
 * Render products by category
 * 
 * @param string $category - Category name to filter by
 * @param array $products - Full products array
 */
function render_products_by_category($category, $products) {
    $filtered = array_filter($products, function($p) use ($category) {
        return isset($p['category']) && $p['category'] === $category;
    });
    
    if (!empty($filtered)) {
        render_product_grid($filtered, 4);
    }
}
