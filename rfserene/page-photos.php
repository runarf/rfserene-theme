<?php
/**
 * @since Serene 1.0
 */
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ('' != get_the_post_thumbnail()) : ?>
	<div class="main-image">
		<?php the_post_thumbnail('serene-featured-image'); ?>
	</div> <!-- .main-image -->
	<?php endif; ?>

	<div class="post-content clearfix">
		<header>
			<h1 class="title"><?php the_title(); ?></h1>

	<?php
        if ('' !== ($description = get_post_meta(get_the_ID(), '_et_page_subtitle', true))) {
            printf('<p>%s</p>', esc_html($description));
        }
    ?>
		</header>

		<div class="entry-content clearfix">
		<?php
            while (have_posts()) : the_post();
                the_content();
        ?>
	        <div class="vorspiel-images">
						<a href="http://www.vorspielfussball.de/Bild%20089.jpg">
							<figure class="vorspiel-image-container">
	          		<img src="http://www.vorspielfussball.de/Bild%20089.jpg">
								<figcaption>11. Platz bei Gay Games in Köln im August 2010</figcaption>
							</figure>
	        </a>
				</div>
	        <a href="http://www.vorspielfussball.de/Vorspiel2009a.jpg">
						<figure class="vorspiel-image-container">
	          <img src="http://www.vorspielfussball.de/Vorspiel2009a.jpg">
						<figcaption> Unsere Mannschaft im Oktober 2009</figcaption>
					</figure>
	        </a>

	        <a href="http://www.vorspielfussball.de/Team%202006.jpg">
						<figure class="vorspiel-image-container">
	          <img src="http://www.vorspielfussball.de/Team%202006.jpg">
						<figcaption>Vorspiel 2006 Saisonabschlussfeier</figcaption>
					</figure>
	        </a>

	        <a href="http://www.vorspielfussball.de/DSC02470.jpg">
						<figure class="vorspiel-image-container">

	          <img src="http://www.vorspielfussball.de/DSC02470.jpg">
						<figcaption>4. Platz bei der schwulen Fußballweltmeisterschaft 2005 in Kopenhagen </figcaption>
					</figure>
	        </a>

	        <a href="http://www.vorspielfussball.de/94_JPG.jpg">
						<figure class="vorspiel-image-container">
	          <img src="http://www.vorspielfussball.de/94_JPG.jpg">
						<figcaption> Unser East-West-Turnier: 2003 und 2004 - 2.Platz und 1. Platz</figcaption>
					</figure>
	        </a>

	        <a href="http://www.vorspielfussball.de/vorspielberlin.jpg">
						<figure class="vorspiel-image-container">
	          <img src="http://www.vorspielfussball.de/vorspielberlin.jpg">
						<figcaption>3. Platz bei den Europameisterschaften 2003 in Kopenhagen.</figcaption>
					</figure>
	        </a>

	        <a href="http://www.vorspielfussball.de/vorspiellondon.jpeg">
						<figure class="vorspiel-image-container">
	          <img src="http://www.vorspielfussball.de/vorspiellondon.jpeg">
						<figcaption>2. Platz bei der schwulen Fußballweltmeisterschaft 2001 in London (B-WM)</figcaption>
					</figure>
	        </a>

	        <a href="http://www.vorspielfussball.de/VorspielHP1.jpg">
						<figure class="vorspiel-image-container">
	          <img src="http://www.vorspielfussball.de/VorspielHP1.jpg">
						<figcaption>Aufstieg in die 1. TU-Liga im Sommer 2000</figcaption>
					</figure>
	        </a>
	      </div>
        <?php
                wp_link_pages(array(
                    'before' => '<p><strong>'.esc_attr__('Pages', 'Serene').':</strong> ',
                    'after' => '</p>',
                    'next_or_number' => 'number',
                ));
            endwhile; // end of the loop.
        ?>
		</div>

		<?php edit_post_link(esc_attr__('Edit this post', 'Serene')); ?>
	</div> <!-- .post-content -->

</article>

<?php comments_template('', true); ?>

<?php get_footer(); ?>
