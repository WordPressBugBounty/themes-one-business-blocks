<?php
/**
 * Title: Latest News
 * Slug: one-business-blocks/latest-news
 * Categories: one-business-blocks, latest-news
 */
?>

<!-- wp:group {"metadata":{"categories":["one-business-blocks","latest-news"],"patternName":"one-business-blocks/latest-news","name":"Latest News"},"className":"blog-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group blog-section has-base-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:spacer {"height":"19px"} -->
<div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","className":" wow bounceInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontSize":"26px"}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-text-align-center wow bounceInUp has-primary-color has-text-color has-link-color" style="font-size:26px;text-transform:uppercase"><?php esc_html_e('LATEST NEWS','one-business-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"regular"} -->
<p class="has-text-align-center has-heading-color has-text-color has-link-color has-regular-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit','one-business-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"28px"} -->
<div style="height:28px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":36,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"blog-box","style":{"color":{"background":"#000e0d"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-box has-background" style="background-color:#000e0d;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"blog-date-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-date-box" style="margin-top:0;margin-bottom:0"><!-- wp:post-date {"textAlign":"right","format":"M y","className":"blog-date","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"style":{"spacing":{"padding":{"right":"0","left":"0"}}}} /-->

<!-- wp:group {"className":"blog-box-inner","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-box-inner" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:post-excerpt {"textAlign":"center","excerptLength":25} /-->

<!-- wp:read-more {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('There is no post found','one-business-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->