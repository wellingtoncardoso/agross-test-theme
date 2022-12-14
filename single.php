<?php get_header(); ?>
<main id="single">
	<div class="container">
		<div class="flex">
			<div id="post-<?php the_ID(); ?>" <?php post_class( ''col-lg-8'' ); ?>>
				<div class="entry-meta">
					<!-- <?php the_post_thumbnail(); ?> -->
					<div class="entry-content">
						<h1 class="entry-title">
							<div class="entry-date"><p><?php the_time('d.m.Y') ?></p></div>
							<?php the_title(); ?>		
						</h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			
			<aside class="col-lg-4">
				<?php dynamic_sidebar('sidebar-1') ?>
			</aside>
		</div>
	</div>
</main>
<?php get_footer(); ?>