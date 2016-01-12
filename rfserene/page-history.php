<?php
/**
 * @package Serene
 * @since Serene 1.0
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
	<div class="main-image">
		<?php the_post_thumbnail( 'serene-featured-image' ); ?>
	</div> <!-- .main-image -->
	<?php endif; ?>

	<div class="post-content clearfix">
		<header>
			<h1 class="title"><?php the_title(); ?></h1>

	<?php
		if ( '' !== ( $description = get_post_meta( get_the_ID(), '_et_page_subtitle', true ) ) )
			printf( '<p>%s</p>', esc_html( $description ) );
	?>
		</header>

		<div class="entry-content clearfix">
		<?php
			while ( have_posts() ) : the_post();
				//the_content();
        ?>
        <p>
          Vorspiel spielt seit Anfang der 90er Jahre in der TU-Liga.
          Während man in den ersten Jahren eher in den unteren Ligen kickte, gelang ab 1996 der kontinuierliche Aufstieg bis in die 1. Liga im Jahr 2000.
          Immerhin zwei Jahre spielte unser Team erstklassig, bedingt durch viele Abgänge und interne Schwierigkeiten musste man 2002 wieder in die 2. Liga.
        </p>
        <p>
          Hier gelang 2002/03 noch einmal der Klassenerhalt durch eine sensationelle Rückrunde in der 13 Punkte Rückstand zum rettenden Ufer noch aufgeholt werden konnten.
          Der weitere sportliche Niedergang war aber erst mal nicht aufzuhalten und so fand sich Vorspiel bald in der 3. Liga wieder, der man von 2004 bis 2008 angehörte.
          2008 dann der bittere Abstieg in Liga 4.
        </p>
        <p>
          Nach zwei Jahren erfolgte in der Spielzeit 2009/2010 der Wiederaufstieg in Liga 3, als Vorspiel in elf Spielen in Folge ungeschlagen blieb und am Ende einer dramatischen Saison sogar noch den Meistertitel der Staffel 4B erreichen konnte.
          Nur ein Jahr später gelang erneut die Meisterschaft (in der Staffel 3A) und damit verbunden der Aufstieg in die 2. Liga, der Vorspiel zuletzt 2003/2004 angehörte.
          Nach einer sehr unglücklichen Saison stand 2012 der Abstieg in die 3.Liga fest, am Ende fehlten nur 2 Punkte zum Klassenerhalt. Seit 2012 spielt unser Team in der 3.Liga.
        </p>

        <table class="vorspiel-tu-table">
          <tbody>
            <tr><td class="table-year" colspan="2">2013/2014</td></tr>
            <tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 8. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 3. Liga</td></tr>
            <tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> 6S/2U/12N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 44/56 Tore</td></tr>
            <tr><td class="table-more" colspan="2">Click here to read more</td></tr>
          </tbody>
        </table>

				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2">2013/2014</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 8. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 3. Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pitch.png" /> 6S/2U/12N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 44/56 Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>

				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2">2013/2014</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 8. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 3. Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pitch.png" /> 6S/2U/12N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 44/56 Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>
        <?php
				wp_link_pages( array(
					'before'         => '<p><strong>' . esc_attr__( 'Pages', 'Serene' ) . ':</strong> ',
					'after'          => '</p>',
					'next_or_number' => 'number',
				) );
			endwhile; // end of the loop.
		?>
		</div>

		<?php edit_post_link( esc_attr__( 'Edit this post', 'Serene' ) ); ?>
	</div> <!-- .post-content -->

</article>

<?php comments_template( '', true ); ?>

<?php get_footer(); ?>
