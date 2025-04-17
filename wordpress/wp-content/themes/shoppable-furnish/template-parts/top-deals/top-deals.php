<?php
$top_dealone = get_theme_mod('top_deal_one','');
$top_dealoneID = get_theme_mod('top_deal_image_one','');

$top_dealtwo = get_theme_mod('top_deal_two','');
$top_dealtwoID = get_theme_mod('top_deal_image_two','');

$top_dealthree = get_theme_mod('top_deal_three','');
$top_dealthreeID = get_theme_mod('top_deal_image_three','');

$top_dealfour = get_theme_mod('top_deal_four','');
$top_dealfourID = get_theme_mod('top_deal_image_four','');

$top_dealfive = get_theme_mod('top_deal_five','');
$top_dealfiveID = get_theme_mod('top_deal_image_five','');


$top_deal_array = array();
$has_top_deal = false;
if( !empty( $top_dealoneID ) || !empty($top_dealone) ){
	$top_deal_one  = wp_get_attachment_image_src( $top_dealoneID,'hello-shoppable-1370-550' );
 	if ( is_array(  $top_deal_one ) ){
 		$has_top_deal = true;
   	 	$top_deals_one = $top_deal_one[0];
   	 	$top_deal_array['image_one']['ID'] = $top_deals_one;
  	}
  	if ( !empty($top_dealone) ){
 		$has_top_deal = true;
   	 	$top_deal_array['image_one']['category'] =  $top_dealone;	
  	}
}
if( !empty( $top_dealtwoID ) || !empty($top_dealtwo) ){
	$top_deal_two = wp_get_attachment_image_src( $top_dealtwoID,'hello-shoppable-420-300' );
	if ( is_array(  $top_deal_two ) ){
		$has_top_deal = true;	
        $top_deals_two = $top_deal_two[0];
        $top_deal_array['image_two']['ID'] = $top_deals_two;	
  	}
  	if ( !empty($top_dealtwo) ){
 		$has_top_deal = true;
   	 	$top_deal_array['image_two']['category'] =  $top_dealtwo;	
  	}
}
if( !empty( $top_dealthreeID ) || !empty($top_dealthree) ){
	$top_deal_three = wp_get_attachment_image_src( $top_dealthreeID,'hello-shoppable-420-300' );
	if ( is_array(  $top_deal_three ) ){
		$has_top_deal = true;	
        $top_deals_three = $top_deal_three[0];
        $top_deal_array['image_three']['ID'] = $top_deals_three;		
  	}
  	if ( !empty($top_dealthree) ){
 		$has_top_deal = true;
   	 	$top_deal_array['image_three']['category'] =  $top_dealthree;	
  	}
}

if( !empty( $top_dealfourID ) || !empty($top_dealfour) ){	
	$top_deal_four = wp_get_attachment_image_src( $top_dealfourID,'hello-shoppable-420-300' );
	if ( is_array(  $top_deal_four ) ){
		$has_top_deal = true;
      	$top_deals_four = $top_deal_four[0];
      	$top_deal_array['image_four']['ID'] = $top_deals_four;		
  	}
  	if ( !empty($top_dealfour) ){
 		$has_top_deal = true;
   	 	$top_deal_array['image_four']['category'] =  $top_dealfour;	
  	}
}

if( !empty( $top_dealfiveID ) || !empty($top_dealfive) ){	
	$top_deal_five = wp_get_attachment_image_src( $top_dealfiveID,'hello-shoppable-1370-550' );
	if ( is_array(  $top_deal_five ) ){
		$has_top_deal = true;
      	$top_deals_five = $top_deal_five[0];
      	$top_deal_array['image_five']['ID'] = $top_deals_five;	
  	}
  	if ( !empty($top_dealfive) ){
 		$has_top_deal = true;
   	 	$top_deal_array['image_five']['category'] =  $top_dealfive;	
  	}
}

if( get_theme_mod( 'top_deal_section', false ) && $has_top_deal ){ ?>
	<section class="section-top-deal-area">
		<div class="content-wrap">
			<?php foreach( $top_deal_array as $each_top_deal ){ ?>
				<article class="deal-content-wrap">
					<?php if ( isset( $each_top_deal['ID'] ) && !empty( $each_top_deal['ID'] ) ){ ?>
						<figure class= "featured-image">
							<img src="<?php echo esc_url( $each_top_deal['ID'] ); ?>">
						</figure>
					<?php } ?>
					<?php if ( isset( $each_top_deal['category'] ) && !empty( $each_top_deal['category'] ) ){ ?>
						<h6 class="entry-title">
							<a href="<?php echo esc_url( get_category_link( $each_top_deal ['category'] ) ); ?>">
									<?php echo esc_html(get_cat_name( $each_top_deal ['category'] ) ); ?>
								<i class="fas fa-arrow-right"></i>
							</a>	
						</h6>
					<?php } ?>
				</article>
			<?php } ?>
		</div>
	</section>
<?php } ?>
