<?php get_template_part('/parts/spacing_alignment_columns') ?>

<?php if ( get_row_layout() == 'header_and_paragraphs' ) : ?>

    <section class="header-combo pt-4 <?php acf_row_y_margin($tm, $bm); ?>">
        <div class="<?php echo $bg; ?>">
            <div class="<?php echo $bg_spacing; ?>">
                <div class="container mx-auto flex justify-center">
                    <div class="<?php acf_row_x_margin($lm, $rm); ?> <?php echo $rc; ?> <?php acf_row_alignment($ra); ?>">
                
                        <div class="flex flex-col <?php acf_row_padding($tp, $bp, $lp, $rp); ?> items-<?php echo $ra; ?>">
                            
                            <?php if ( get_sub_field( 'subtile_toggle' ) == 1 ) : ?>
                                <h3 class="text-lg lg:text-xl 2xl:text-2xl mt-1 lg:mt-2"><?php the_sub_field( 'subtitle' ); ?></h3>
                            <?php endif; ?>

                            <h2 class="text-3xl lg:text-4xl 2xl:text-5xl my-1 lg:my-2 font-title tracking-wide"><?php the_sub_field( 'header_content' ); ?></h2>
                            <div class="bg-brand-main h-1 w-12"></div>
                            <?php if ( have_rows( 'paragraphs' ) ) : ?>
                                <?php while ( have_rows( 'paragraphs' ) ) : the_row(); ?>
                                    <p class="text-base lg:text-lg mt-4"><?php the_sub_field( 'paragraph_content' ); ?></p>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if ( have_rows( 'button_options' ) ) : ?>
                                <div class="flex flex-col md:flex-row flex-wrap md:space-x-2 xl:space-x-4">
                                    <?php while ( have_rows( 'button_options' ) ) : the_row(); ?>
                                        <?php if ( get_sub_field( 'button_toggle' ) == 1 ) : ?>
                                            <?php $button = get_sub_field( 'button' ); ?>
                                            <?php $button_colour = get_sub_field( 'button_colour' ); ?>
                                            <?php if ( $button ) : ?>
                                                <a class="button <?php echo $button_colour; ?> mt-4 xl:mt-6" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>