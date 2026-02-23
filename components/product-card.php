<?php
/**
 * Product Card Component
 * 
 * A reusable PHP component for displaying product cards with consistent UI/functionality.
 * Supports two button types: 'cart' (Add to Cart with quantity) and 'whatsapp' (WhatsApp inquiry)
 * 
 * @param string $image - Product image URL (required)
 * @param string $title - Product title (required)
 * @param string $description - Product description (required)
 * @param float $price - Current price (required)
 * @param float $originalPrice - Original price for discount (optional, default: null)
 * @param string $discount - Discount label (optional, default: null, e.g., "-16%")
 * @param int $rating - Rating count 1-5 (optional, default: 4)
 * @param int $reviewCount - Number of reviews (optional, default: 2)
 * @param string $productLink - Link to product detail page (optional, default: "product-detail.php")
 * @param string $buttonType - Button type: 'cart' or 'whatsapp' (optional, default: 'cart')
 * @param string $whatsappNumber - WhatsApp number for inquiry (optional, default: "11234567897")
 * @param string $whatsappMessage - Pre-filled WhatsApp message (optional, default: "Hello, I'm interested in this product")
 */

// Set default values
$discount = $discount ?? null;
$rating = $rating ?? 4;
$reviewCount = $reviewCount ?? 2;
$productLink = $productLink ?? "product-detail.php";
$buttonType = $buttonType ?? 'cart';
$whatsappNumber = $whatsappNumber ?? "11234567897";
$whatsappMessage = $whatsappMessage ?? "Hello, I'm interested in this product";

// Calculate discount percentage if original price provided but discount not
if ($originalPrice && !$discount && $price < $originalPrice) {
    $discountPercent = round(($originalPrice - $price) / $originalPrice * 100);
    $discount = "-" . $discountPercent . "%";
}

// Format prices
$priceFormatted = number_format($price, 2);
$originalPriceFormatted = $originalPrice ? number_format($originalPrice, 2) : null;

// Generate star rating HTML
$fullStars = min(5, max(0, $rating));
$emptyStars = 5 - $fullStars;
$ratingStars = str_repeat('★', $fullStars) . str_repeat('★', $emptyStars);
?>

<div class="featured-product-card">
    <div class="image-box mb-16">
        <?php if ($discount): ?>
        <span class="sale-label subtitle fw-400 black"><?php echo htmlspecialchars($discount); ?></span>
        <?php endif; ?>
        
        <a href="<?php echo htmlspecialchars($productLink); ?>">
            <img src="<?php echo htmlspecialchars($image); ?>" class="product-image" alt="<?php echo htmlspecialchars($title); ?>">
        </a>
        
        <div class="side-icons">
            <ul class="list-unstyled">
                <li>
                    <a href="#" class="add-to-wishlist" data-product="<?php echo htmlspecialchars($title); ?>">
                        <i class="fa-light fa-heart"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn quick-view-btn" data-bs-toggle="modal" data-bs-target="#productQuickView" data-product="<?php echo htmlspecialchars($title); ?>">
                        <i class="fa-regular fa-eye"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="zui-wrapper-button compare-btn" data-bs-toggle="modal" data-bs-target="#comparepopup" data-product="<?php echo htmlspecialchars($title); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                            <path d="M12.979 16.5293C12.8173 16.5293 12.6557 16.4669 12.5333 16.3425C12.2913 16.0964 12.2947 15.7007 12.5408 15.4586L14.6415 13.393C14.7584 13.2759 14.8228 13.1207 14.8228 12.9558C14.8228 12.7913 14.7588 12.6366 14.6426 12.5197L12.5432 10.4773C11.9709 9.87765 12.8002 9.02596 13.4148 9.5813L15.5176 11.627C15.5194 11.6288 15.5213 11.6305 15.523 11.6323C15.8775 11.9858 16.0728 12.4558 16.0727 12.9558C16.0727 13.4559 15.8775 13.9259 15.523 14.2793C15.522 14.2803 15.521 14.2813 15.5199 14.2823L13.4172 16.35C13.2955 16.4696 13.1372 16.5293 12.979 16.5293ZM12.979 13.5293H3.82275C1.755 13.5293 0.0727539 11.8471 0.0727539 9.7793V8.18555C0.103473 7.35718 1.29232 7.3578 1.32275 8.18555V9.7793C1.32275 11.1578 2.44425 12.2793 3.82275 12.2793H12.979C13.8074 12.31 13.8068 13.4989 12.979 13.5293ZM15.4478 9.49805C15.1026 9.49805 14.8228 9.21824 14.8228 8.87305V7.2793C14.8228 5.9008 13.7013 4.7793 12.3228 4.7793H3.1665C2.33813 4.74858 2.33875 3.55974 3.1665 3.5293H12.3228C14.3905 3.5293 16.0728 5.21155 16.0728 7.2793V8.87305C16.0728 9.21824 15.7929 9.49805 15.4478 9.49805ZM3.16644 7.6543C3.00938 7.6543 2.85216 7.59549 2.73069 7.47727L0.627879 5.43162C0.626035 5.42983 0.624223 5.42805 0.622441 5.42624C0.267973 5.07283 0.0727539 4.60283 0.0727539 4.1028C0.0727539 3.60277 0.267973 3.13274 0.622441 2.77937C0.623473 2.77833 0.624473 2.77733 0.625504 2.77633L2.72832 0.708647C2.97444 0.466647 3.37016 0.46996 3.61216 0.716085C3.85416 0.96221 3.85085 1.35793 3.60472 1.59993L1.50397 3.66562C1.26438 3.89593 1.26388 4.30799 1.50285 4.5389L3.60232 6.5813C3.84972 6.82199 3.85516 7.21768 3.61447 7.46512C3.492 7.59102 3.32925 7.6543 3.16644 7.6543Z" fill="#363636" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="product-desc">
        <div class="rating-star mb-12">
            <h6 class="orange-1"><?php echo $ratingStars; ?><span class="light-gray">★</span>&nbsp;<span class="black subtitle fw-400">(<?php echo $reviewCount; ?>)</span></h6>
        </div>
        
        <a href="<?php echo htmlspecialchars($productLink); ?>" class="product-title h5 fw-500 mb-12">
            <?php echo htmlspecialchars($title); ?>
        </a>
        
        <p class="light-gray mb-12"><?php echo htmlspecialchars($description); ?></p>
        
        <h6 class="black fw-500 mb-24">
            $<?php echo $priceFormatted; ?>
            <?php if ($originalPriceFormatted): ?>
            &nbsp;<span class="subtitle text-decoration-line-through fw-400 light-gray">$<?php echo $originalPriceFormatted; ?></span>
            <?php endif; ?>
        </h6>
        
        <div class="functional-bar">
            <?php if ($buttonType === 'whatsapp'): ?>
            <?php 
            $whatsappUrl = "https://wa.me/" . $whatsappNumber . "?text=" . urlencode($whatsappMessage . ": " . $title);
            ?>
            <a href="<?php echo $whatsappUrl; ?>" target="_blank" class="cus-btn whats-app-btn" style="background-color:#25D366;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#ffffff">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.182 5.076 4.709.7.324 1.342.586 1.797.711.198.055.397.055.596.015.297-.149 1.255-.464 2.39-1.475.883-.788 1.48-1.761 1.653-2.059.173-.297.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01zM12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <span class="text" style="color:#ffffff;">Inquiry on WhatsApp</span>
                <span class="circle"></span>
            </a>
            <?php else: ?>
            <div class="quantity quantity-wrap">
                <div class="input-area quantity-wrap">
                    <input class="decrement" type="button" value="-">
                    <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                    <input class="increment" type="button" value="+">
                </div>
            </div>
            <a href="#" class="cus-btn add-to-cart-btn" data-product="<?php echo htmlspecialchars($title); ?>" data-price="<?php echo $price; ?>">
                <span class="text">Add to cart</span>
                <span class="circle"></span>
            </a>
            <?php endif; ?>
        </div>
    </div>
</div>
