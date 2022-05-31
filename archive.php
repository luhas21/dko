
<?php //include 'header.php';
get_header(); ?>

<section class="main">

	<!-- Flyers Slider -->

	<div class="main-side">
		<div class="slider">
		<?php
		$today = date('Ymd');
		$event_poster = new WP_Query(array(
			'post_type' => 'post',
			'meta_query' => array(
				'relation' => 'AND',
				'event_date' =>array(
					'key' => 'event_date',
					'compare' => '>=',
					'value' => $today,
					'type' => 'numeric'
				),
				'event_time' =>array(
					'key' => 'event_time',
					'compare' => 'EXISTS',
					'type' => 'numeric'
				)
			),
			'paged' => get_query_var('paged', 0),
			'posts_per_page' => 0,
			'orderby' => array (
				'event_date' => 'ASC',
				'event_time' => 'ASC',
				'title' => 'ASC'
			)
		));

		while($event_poster->have_posts()) {
			$event_poster->the_post();
				
				//$event_poster_exist = get_field('event_poster');
				if(get_field('event_poster') && get_field('display_poster')){
				?>
				<div class="slider-item">
					<div class="image-wrapper">
						<a href="<?php echo get_permalink(); ?>">
						<img src="<?php echo get_field('event_poster'); ?>" alt="">
						</a>
						<div class="event-info">
							<h1><?php the_title(); ?></h1>
							<span class="date">	
							<?php $eventDate = new DateTime(get_field('event_date'));
								echo $eventDate->format('j') . '.';
								echo $eventDate->format('n') . '.';
								echo $eventDate->format('Y'); ?>
							</span>
							<a href="#" class="buy-ticket">Koupit</a>					
						</div>
					</div>
				</div>
			<?php }
			}
			wp_reset_postdata(); ?>
		</div>
	</div>

	<script>
		var slider = tns({
			container: '.slider',
			items: 1,
			mode: "gallery",
			slideBy: 'page',
			speed: 1000,
			nav: false,
			controls: false,
			autoplay: true,
			autoplayButtonOutput: false,
		});
	</script>

	<!-- Items -->

	<div class="list events">

	<?php 
        $futureEvents = new WP_Query(array(
          'post_type' => 'post',
		  'tax_query' => array(
			  array(
				  'taxonomy' => 'category',
				  'field'    => 'term_id',
				  'terms'    => get_the_category()[0]->term_id,
				  ),
			  ),
          'meta_query' => array(
              'relation' => 'AND',
              'event_date' =>array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric'
              ),
              'event_time' =>array(
                  'key' => 'event_time',
                  'compare' => 'EXISTS',
                  'type' => 'numeric'
              )
            ),
            'paged' => get_query_var('paged', 1),
            'posts_per_page' => 10,
            'orderby' => array (
                'event_date' => 'ASC',
                'event_time' => 'ASC',
                'title' => 'ASC'
            )
        ));
      if($futureEvents->have_posts()) {
        while($futureEvents->have_posts()) {
          $futureEvents->the_post(); 
          ?>

		<div class="list-item">
			<div class="image">
				<a href="<?php echo get_permalink(); ?>">
					<img src="<?php echo get_field('event_picture_1'); ?>" alt="">
				</a>
				<?php
				if(get_field('presale_date')) {
					echo '<span class="presale">předprodej od ';
					$presaleDate = new DateTime(get_field('presale_date'));
					echo $presaleDate->format('j') . '.';
					echo $presaleDate->format('n') . '.';
					echo $presaleDate->format('Y');
					echo '</span>';
				}
				?>				
			</div>
			<div class="text">
				<a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<span class="event-info">
				<?php if(get_field('event_date')) {
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
						echo get_field('event_place') . '<br>';
				 }
				 if(get_field('event_date_2')) {
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
						echo get_field('event_place') . '<br>';
				 }
				 if(get_field('event_date_3')) {
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
						echo get_field('event_place');
				 } ?>
				</span>
				<p>						
				<?php
				if(!is_single()) { ?>
					<p><?php if (has_excerpt()) {
						echo get_the_excerpt();
					} else {
						echo wp_trim_words(get_the_content(), 43);
					} ?></p>
				<?php } ?>
				</p>
			</div>
			<div class="category-image">
				<?php echo get_cat_ico_class(esc_html( get_the_category()[0]->name ));
				if (!empty( get_the_category())){
					echo '<a href="' . get_permalink() . '" class="more-info">VÍCE INFORMACÍ</a>';
				} ?>
			</div>
			<div class="buy-button">
				<a href="#">Koupit</a>
			</div>
		</div>
    <?php 
		}
	}
	?>
     

<!--

		<div class="list-item">
			<div class="image">
				<a href="#">
					<img src="temp/intro1.jpg" alt="">
				</a>
				<span class="presale">předprodej od 1. 3. 2022</span>
			</div>
			<div class="text">
				<a href="#"><h2>JAK SE Husákovi ZDÁLO, ŽE JE VĚRA ČÁSLAVSKÁ</h2></a>
				<span class="event-info">Středa 2. 3. 2022 / 15:00 / Dům kultury Ostrov</span>
				<p>Gustáv Husák a Věra Čáslavská – dva protipóly jednoho období. Anoda a Katoda. Není lepší zadání pro grotesky. Není lepší východisko pro klauny. Originální zpracování naší nedávné minulosti. Gustav Husák jako komik. Nejpomalejší komik na světě. Tak dlouho ve funkci, až je směšný i sám sobě. Nehrozí to i dnes? Komunista versus gymnastka. To tady ještě nebylo.</p>
				<a href="#" class="more-info">více informací</a>
			</div>
			<div class="category-image">
				<span class="ico-divadlo"></span>
				<a href="#">divadlo</a>
			</div>
			<div class="buy-button">
				<a href="#">Koupit</a>
			</div>
		</div>
	  -->

	</div>

</section>


<?php //include 'footer.php'; 
get_footer(); ?>
