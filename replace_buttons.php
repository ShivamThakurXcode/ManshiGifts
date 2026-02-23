<?php
// Replace buttons in shop.php
$shop_content = file_get_contents('shop.php');

$old_pattern = '<div class="functional-bar">
                                            <div class="quantity quantity-wrap">
                                                <div class="input-area quantity-wrap">
                                                    <input class="decrement" type="button" value="-">
                                                    <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                                        class="number">
                                                    <input class="increment" type="button" value="+">
                                                </div>
                                            </div>
                                            <a href="#" class="cus-btn">
                                                <span class="text">Add to cart</span>
                                                <span class="circle"></span>
                                            </a>
                                        </div>';

$new_button = '<div class="functional-bar">
                                            <a href="https://wa.me/11234567897?text=Hello,%20I%27m%20interested%20in%20this%20product" target="_blank" class="cus-btn whats-app-btn" style="background-color:#25D366;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#ffffff"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.182 5.076 4.709.7.324 1.342.586 1.797.711.198.055.397.055.596.015.297-.149 1.255-.464 2.39-1.475.883-.788 1.48-1.761 1.653-2.059.173-.297.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01zM12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                                                <span class="text" style="color:#ffffff;">Inquiry on WhatsApp</span>
                                                <span class="circle"></span>
                                            </a>
                                        </div>';

$shop_content = str_replace($old_pattern, $new_button, $shop_content);
file_put_contents('shop.php', $shop_content);
echo "shop.php updated\n";

// Replace buttons in index.php
$index_content = file_get_contents('index.php');
$index_content = str_replace($old_pattern, $new_button, $index_content);
file_put_contents('index.php', $index_content);
echo "index.php updated\n";

// Replace buttons in product-detail.php
$product_content = file_get_contents('product-detail.php');
$product_content = str_replace($old_pattern, $new_button, $product_content);
file_put_contents('product-detail.php', $product_content);
echo "product-detail.php updated\n";

echo "All files updated successfully!\n";
?>
