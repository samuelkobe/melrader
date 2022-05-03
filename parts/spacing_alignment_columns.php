<?php
	global $tm; // Global top margin for row.
	global $tp; // Global top padding for row.
	global $bm; // Global bottom margin for row.
	global $bp; // Global bottom padding for row.
	global $lm; // Global left margin for row.
	global $lp; // Global left padding for row.
	global $rm; // Global right margin for row.
	global $rp;// Global right padding for row.
	global $ra; // Global alignment for row.
	global $rc; // Global columns for row.
	global $bg; // Global background colour for row.
	global $bg_spacing; // Global background spacing for row.
?>

<?php if ( have_rows( 'row_settings' ) ) : ?>
	<?php while ( have_rows( 'row_settings' ) ) : the_row(); ?>

		<?php if ( have_rows( 'top' ) ) : ?>
			<?php while ( have_rows( 'top' ) ) : the_row(); ?>
				<?php
					$tm = get_sub_field( 'top_margin' );
					$tp = get_sub_field( 'top_padding' );
				?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if ( have_rows( 'bottom' ) ) : ?>
			<?php while ( have_rows( 'bottom' ) ) : the_row(); ?>
				<?php
					$bm = get_sub_field( 'bottom_margin' );
					$bp = get_sub_field( 'bottom_padding' );
				?>
			<?php endwhile; ?>
		<?php endif; ?>
		
		<?php if ( have_rows( 'left' ) ) : ?>
			<?php while ( have_rows( 'left' ) ) : the_row(); ?>
				<?php
					$lm = get_sub_field( 'left_margin' );
					$lp = get_sub_field( 'left_padding' );
				?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if ( have_rows( 'right' ) ) : ?>
			<?php while ( have_rows( 'right' ) ) : the_row(); ?>
				<?php
					$rm = get_sub_field( 'right_margin' );
					$rp = get_sub_field( 'right_padding' );
				?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php
			$ra = get_sub_field( 'alignment' );
			$rc = get_sub_field( 'number_of_columns' );
			$bg = get_sub_field( 'background_colour' );
			//set container padding margin depending on background colour, as coloured bgs need more space.
			$bg_spacing = acf_bg_colour_check_set_container_spacing($bg);
		?>

	<?php endwhile; ?>
<?php endif; ?>