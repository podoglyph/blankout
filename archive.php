<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div id="main" class="col-lg-9">
			<article id="blog">
				<header class="article-header page-header">
					<?php if (function_exists('bcn_display')) : ?>
						<ol class="breadcrumb">
							<?php bcn_display_list(); ?>
						</ol>
					<?php endif; ?>

					<?php if (is_category()) : ?>
						<h1 class="archive-title entry-title page-title">
							<?php printf(__('Category archive: %s', 'blankout'), single_cat_title('', FALSE)); ?>
						</h1>

					<?php elseif (is_tag()) : ?>
						<h1 class="archive-title entry-title page-title">
							<span><?php _e("Posts tagged:", 'blankout'); ?></span> <?php single_term_title(); ?>
						</h1>

						<?php
					elseif (is_author()) : global $post; ?>
						<h1 class="archive-title entry-title page-title">
							<span><?php _e("Posts by:", 'blankout'); ?></span> <?php echo get_the_author_meta('display_name', $post->post_author); ?>
						</h1>
						<?php
					elseif (is_day()) : ?>
						<h1 class="archive-title entry-title page-title">
							<span><?php _e("Daily archive:", 'blankout'); ?></span> <?php the_time(get_option('date_format', 'l, F j, Y')); ?>
						</h1>

						<?php
					elseif (is_month()) : ?>
						<h1 class="archive-title entry-title page-title">
							<span><?php _e("Monthly archive:", 'blankout'); ?></span> <?php the_time('F Y'); ?>
						</h1>

						<?php
					elseif (is_year()) : ?>
						<h1 class="archive-title entry-title page-title">
							<span><?php _e("Yearly archive:", 'blankout'); ?></span> <?php the_time('Y'); ?>
						</h1>
					<?php endif; ?>
				</header>
				<?php
				$category_description = category_description();
				if (!empty($category_description)) : ?>
				<small>
					<?php echo apply_filters('archive_meta', '<div class="archive-meta text-muted">' . $category_description . '</div>'); ?>
					<?php endif; ?>
				</small>
			</article>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
					<header class="article-header post-header">
						<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<small class="byline vcard"><?php _e("Posted", 'blankout'); ?>
							<time class="updated" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format', 'l, F j, Y')); ?></time> <?php _e("by", 'blankout'); ?>
							<span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&amp;</span> <?php _e("filed under", 'blankout'); ?> <?php the_category(', '); ?>.
						</small>
					</header>
					<section class="entry-content clearfix">
						<?php if (has_post_thumbnail()) : ?>
							<?php
							mapi_featured_img(
								array(
									'w'     => get_option('medium_size_w', 125),
									'h'     => get_option('medium_size_h', 125),
									'class' => 'alignleft mapi-featured-img',
								)
							);
							?>
						<?php endif; ?>
						<?php // the_content(mapi_excerpt_more()); // for use with More Tag ?>
						<?php echo mapi_excerpt(); ?><?php echo mapi_excerpt_more(); // for standard Mindshare excerpts ?>
					</section>
					<footer class="article-footer">
						<?php //the_taxonomies('before=<p class="tags">&after=</p>&template=%s: %l'); ?>
						<?php echo mapi_edit_link(); ?>
						<hr />
					</footer>
				</article>

			<?php endwhile; ?>

				<?php blankout_page_nav(); ?>

			<?php endif; ?>
		</div>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
