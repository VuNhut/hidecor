<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dazzling
 */

get_header(); ?>
	<div class="top-section">
		<div class="list-catproduct">
			<h3>Danh mục sản phẩm</h3>
			<?php $orderby = 'name';
				$order = 'asc';
				$hide_empty = false ;
				$cat_args = array(
					'hide_empty' => $hide_empty,
				);
				
				$product_categories = get_terms( 'product_cat', $cat_args );
				
				if( !empty($product_categories) ){
					echo '<ul>';
					foreach ($product_categories as $key => $category) {
						echo '<li>';
						echo '<a href="'.get_term_link($category).'" >';
						echo $category->name;
						echo '</a>';
						echo '</li>';
					}
				echo '</ul>';
			} ?>
		</div>
		<?php dazzling_featured_slider(); ?>
		<?php dazzling_call_for_action(); ?>
		<div style="clear:both"></div>
	</div>
	<div class="boxso" class="content-area">
      	<div class="container">
          	<div class="row">
				<div class="col-12 title-decor">
					<h2>Sản phẩm tiêu biểu</h2>
					<div class="line-title">
						<div class="line-one"></div>
						<div class="line-two"></div>
					</div>
				</div>
            	<?php
					$the_query = new WP_Query(
						array (
							'post_type' => 'product',
							'posts_per_page' => 12,
							'tax_query' => array(
								array(
									'taxonomy' => 'product_cat',
									'field' => 'term_id',
									'terms' => array(455, 440, 454, 453, 458, 459, 460)
								)
							),
							'meta_key' => 'home-product',
    						'meta_value' => 1,
						)
					);
					if($the_query->have_posts()) :
						while ($the_query->have_posts() ) : $the_query->the_post();
							$product = wc_get_product( get_the_ID() );
              	?>
					<div class="col-lg-3 col-md-4 col-6 item-decor">
						<div class="hservice product">
							<a href="<?php the_permalink(); ?>">
								<div class="block-image">
									<div class="ih-item">
										<div class="img hover-animation"><?php the_post_thumbnail('size-custom', array('sizes' => '(max-width: 768px) 300px, (max-width: 992px) 250px, 200px')); ?></div>
									</div>
								</div>
								<div class="thong-tin-sp">
									<h4><?php the_title(); ?></h4>
									<p class="price"><?php if ($product->get_price_html()) { echo $product->get_price_html(); } else { echo "Giá bán: Liên hệ"; } ?></p>
								</div>
							</a>
						</div>
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div> <!-- End Row 1 -->
        </div>
    </div>

<?php get_footer(); ?>