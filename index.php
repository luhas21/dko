
<?php //include 'header.php';
get_header(); ?>


<section class="intro" style="background-image: url(<?php echo get_theme_file_uri('/temp/intro-bg.jpg');?>);">

	<div class="intro-events">

	<?php	while(have_posts()) {
        the_post();
		
		$featured_event = get_field('featured_event');
		if($featured_event){
		?>
		<div class="intro-events-item">
			<img src="<?php echo get_field('event_picture_1'); ?>" alt="">
			<?php echo get_cat_ico_class(esc_html( get_the_category()[0]->name )); ?>
			<div class="event-info">
				<h1><?php the_title(); ?></h1>
				<span class="date">
				<?php
					$eventDate = new DateTime(get_field('event_date'));
						echo $eventDate->format('j') . '.';
						echo $eventDate->format('n') . '.';
						echo $eventDate->format('Y'); ?>
				</span>
				<a href="<?php echo get_permalink(); ?>" class="buy-ticket">Koupit</a>
			</div>
		</div>

	<?php }
	} ?>
	</div>

</section>


<?php //include 'footer.php'; 
get_footer(); ?>
