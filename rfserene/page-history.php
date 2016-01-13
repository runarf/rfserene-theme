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

				<a class="vorspiel-season" href="<?php echo get_permalink(179) ?>">
        <table class="vorspiel-tu-table">
          <tbody>
            <tr><td class="table-year" colspan="2">2013/2014 </td></tr>
            <tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 8. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 3. Liga</td></tr>
            <tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> 6S/2U/12N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 44/56 Tore</td></tr>
            <tr><td class="table-more" colspan="2">Click here to read more</td></tr>
          </tbody>
        </table>
			</a>

				<a class="vorspiel-season" href="<?php echo get_permalink(182) ?>">
				<table class="vorspiel-tu-table">
          <tbody>
            <tr><td class="table-year" colspan="2">2012/2013</td></tr>
            <tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 8. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 3. Liga</td></tr>
            <tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> 3S/8U/7N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 33/46 Tore</td></tr>
            <tr><td class="table-more" colspan="2">Click here to read more</td></tr>
          </tbody>
        </table>
			</a>

				<a class="vorspiel-season" href="<?php echo get_permalink(184) ?>">
				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2">2011/2012 </td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 9. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 2. Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> 5S/2U/13N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 42/67 Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>
			</a>

			<a class="vorspiel-season" href="<?php echo get_permalink(187) ?>">
				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2">2010/2011 </td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 1. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 3. Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> 13S/2U/5N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 64/44 Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>
			</a>


				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2">2009/2010</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 1. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 4. Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> 10S/2U/2N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 62/31 Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>

				<a class="vorspiel-season" href="<?php echo get_permalink(189) ?>">
				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2">2008/2009</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 7. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 4. Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> 4S/1U/8N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 25/40 Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>
			</a>

				<a class="vorspiel-season" href="<?php echo get_permalink(191) ?>">
				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2">2007/2008</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 12. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 3. Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> 2S/5U/15N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 31/67 Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>
			</a>

					<a class="vorspiel-season" href="<?php echo get_permalink(193) ?>">
				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2">2006/2007</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> 11. Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> 3. Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> 4S/3U/15N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> 34/86 Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>
			</a>

				<a class="vorspiel-season" href="<?php echo get_permalink(195) ?>">
				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2"></td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> . Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> . Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> S/U/N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> / Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>
			</a>

				<a class="vorspiel-season" href="<?php echo get_permalink(197) ?>">
				<table class="vorspiel-tu-table">
					<tbody>
						<tr><td class="table-year" colspan="2"></td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result.png" /> . Platz</td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/table.png" /> . Liga</td></tr>
						<tr><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/field.png" /> S/U/N </td><td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ball.png" /> / Tore</td></tr>
						<tr><td class="table-more" colspan="2">Click here to read more</td></tr>
					</tbody>
				</table>
			</a>


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
