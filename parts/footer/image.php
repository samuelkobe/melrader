<?php if ( get_field( 'newsletter_media_toggle', 'option' ) == 1 ) : ?>
    <?php
    // This logic exists to pretty up the footer order when no Newsletter is present.
    // Newsletter is on
    $footer_image_col_width = 'w-full md:w-1/2 lg:w-1/4';
    $footer_image_wrapper_padding = 'lg:pr-1/8';
    $footer_image_padding = 'lg:pr-1/12';
    ?>

<?php else : ?>
    <?php
    // Newsletter is off
    $footer_image_col_width = 'w-full md:w-1/4';
    $footer_image_wrapper_padding = 'md:pr-1/8';
    $footer_image_padding = 'md:pr-1/12';
    ?>
<?php endif; ?>

<div class="<?php echo $footer_image_col_width; ?> order-0 mb-8 lg:mb-0 lg:self-center">
    <div class="w-full flex justify-center <?php echo $footer_image_wrapper_padding; ?>">
        <?php $footer_image = get_field( 'footer_image', 'option' ); ?>
        <?php if ( $footer_image ) : ?>
            <img class="<?php echo $footer_image_padding; ?> max-w-full w-[320px] sm:w-[400px] h-auto lg:w-full lg:border-r-4 lg:border-brand-alt" src="<?php echo esc_url( $footer_image['url'] ); ?>" alt="<?php echo esc_attr( $footer_image['alt'] ); ?>" />
        <?php endif; ?>
    </div>
</div>

<div class="w-full md:w-1/4 lg:w-1/6 order-2 lg:order-1 mb-8 lg:mb-0">
    <h3 class="text-lg lg:text-2xl text-white font-bold mb-4 lg:mb-6">Contact</h4>
    <div class="w-full flex flex-col text-base xl:text-xl xl:leading-8">
        <a class="hover:text-brand-alt transition-colors duration-300" href="tel:<?php the_field( 'phone_number', 'option' ); ?>"><?php the_field( 'phone_number_text', 'option' ); ?></a>
        <a class="hover:text-brand-alt transition-colors duration-300" href="mailto:<?php the_field( 'contact_email', 'option' ); ?>?subject=Inquiry from the <?php bloginfo('name'); ?> website" target="_blank"><?php the_field( 'contact_email_link_text', 'option' ); ?></a>
    </div>
</div>