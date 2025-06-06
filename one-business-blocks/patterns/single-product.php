<?php
/**
 * Title: Single Product
 * Slug: one-business-blocks/single-product
 * Categories: one-business-blocks, single-product
 */
?>

<!-- wp:woocommerce/breadcrumbs /-->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"512px"} -->
<div class="wp-block-column" style="flex-basis:512px"><!-- wp:woocommerce/product-image-gallery /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"level":1,"fontSize":"large","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"small"} /-->

<!-- wp:post-excerpt {"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

<!-- wp:woocommerce/add-to-cart-form /-->

<!-- wp:woocommerce/product-meta -->
<div class="wp-block-woocommerce-product-meta"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-sku {"isDescendentOfSingleProductTemplate":true} /-->

<!-- wp:post-terms {"term":"product_cat","prefix":"Category: "} /-->

<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-meta --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-minimal"} /-->

<!-- wp:woocommerce/related-products {"align":"wide"} -->
<div class="wp-block-woocommerce-related-products alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":5,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
<div class="wp-block-query"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-large-font-size" style="margin-top:1rem;margin-bottom:1rem"><?php esc_html_e('Related Products','one-business-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:post-template {"layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:woocommerce/product-image {"imageSizing":"cropped","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:woocommerce/related-products -->