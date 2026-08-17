<div class="w-full md:w-1/2 lg:w-1/4 order-1 lg:order-4 mb-8 lg:mb-0">
    <h3 class="text-lg lg:text-2xl text-white font-bold mb-4 lg:mb-7"><?php echo get_field( 'newsletter_title', 'option' ); ?></h4>
    <?php echo get_field( 'newsletter_form_embed', 'option' ); ?>
    <p class="mt-2 xl:mt-4 text-grey-light text-sm" ><?php echo get_field( 'newsletter_message', 'option' ); ?></p>
</div>