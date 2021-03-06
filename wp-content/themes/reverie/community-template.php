<?php 
/*
Temp late Name: Community Page Template
*/

get_header(); ?>
<?php// echo 'Community'; ?>

<!-- Row for main content area -->
<div class="row">
	<div class="small-12 large-8 columns">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>		
		
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<!--?php reverie_entry_meta(); ?-->
			</header>
			<div class="entry-content">
				<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('full'); } ?></a></figure> 					
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
</div><!-- end row -->		
<?php get_footer(); ?>