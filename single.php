
<?php //include 'header.php';
get_header(); ?>


<section class="main">

<?php	while(have_posts()) {
        the_post(); ?>

	<!-- Flyer -->

	<div class="main-side">
		<div class="flyer">
			<img src="<?php echo get_field('event_poster'); ?>" alt="">
		</div>
	</div>

	<!-- Event detail -->

	<div class="event-detail">
		<div class="event-text">
			<h1><?php the_title(); ?></h1>
			<div class="subtitle"><?php echo get_field('event_place'); ?></div>
			<p><?php the_content(); ?></p>
		</div>

		<div class="event-image">
			<img src="<?php echo get_field('event_picture_1'); ?>" alt="">
		</div>

		<div class="event-bottom">
			<div class="event-dates">
				<?php if(get_field('event_date')) { ?>
				<div class="event-dates-item">
					<span class="date">	<?php
						$eventDate = new DateTime(get_field('event_date'));
							echo get_day_name($eventDate->format('l')) . ' ';
							echo $eventDate->format('j') . '.';
							echo $eventDate->format('n') . '.';
							echo $eventDate->format('Y');
							echo ' / '; 
						$eventTime = new DateTime(get_field('event_time'));
							echo $eventTime->format('G') . ':';
							echo $eventTime->format('i');
							echo ' / '; 
							echo get_field('event_place');?>
					</span>
					<div class="buy-button">
						<a href="#">Koupit</a>
					</div>
				</div>
				<?php } 
				if(get_field('event_date_2')) { ?>
				<div class="event-dates-item">
					<span class="date">	<?php
						$eventDate = new DateTime(get_field('event_date_2'));
							echo get_day_name($eventDate->format('l')) . ' ';
							echo $eventDate->format('j') . '.';
							echo $eventDate->format('n') . '.';
							echo $eventDate->format('Y');
							echo ' / '; 
						$eventTime = new DateTime(get_field('event_time_2'));
							echo $eventTime->format('G') . ':';
							echo $eventTime->format('i');
							echo ' / '; 
							echo get_field('event_place');?>
					</span>
					<div class="buy-button">
						<a href="#">Koupit</a>
					</div>
				</div>
				<?php }
				if(get_field('event_date_3')) { ?>
				<div class="event-dates-item">
					<span class="date">	<?php
						$eventDate = new DateTime(get_field('event_date_3'));
							echo get_day_name($eventDate->format('l')) . ' ';
							echo $eventDate->format('j') . '.';
							echo $eventDate->format('n') . '.';
							echo $eventDate->format('Y');
							echo ' / '; 
						$eventTime = new DateTime(get_field('event_time_3'));
							echo $eventTime->format('G') . ':';
							echo $eventTime->format('i');
							echo ' / '; 
							echo get_field('event_place'); ?>
					</span>
					<div class="buy-button">
						<a href="#">Koupit</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="category-image">
			<?php
			echo get_cat_ico_class(esc_html(get_the_category()[0]->name));
			if (!empty( get_the_category())){
				echo '<a href="' . esc_url(get_category_link( get_the_category()[0]->term_id)) . '">' . esc_html(get_the_category()[0]->name) . '</a>';
			} ?>
			</div>
		</div>

	</div>

	<?php } ?>
</section>


<?php //include 'footer.php'; 
get_footer(); ?>
