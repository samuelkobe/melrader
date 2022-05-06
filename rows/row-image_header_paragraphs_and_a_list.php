<?php get_template_part('/parts/spacing_alignment_columns') ?>

<?php if ( get_row_layout() == 'image_header_paragraphs_and_a_list' ) : ?>

    <section class="header-image-combo pt-4 <?php acf_row_y_margin($tm, $bm); ?> <?php acf_row_x_margin($lm, $rm); ?> Helo">
        <div class="<?php echo $bg; ?>">
            <div class="<?php echo $bg_spacing; ?>">
                <div class="container mx-auto px-4 2xl:px-8 flex justify-center">
                    <div class=" <?php echo $rc; ?> <?php acf_row_alignment($ra); ?>">
                        
                        <div class="flex flex-col lg:flex-row gap-x-1/12 items-center <?php acf_row_padding($tp, $bp, $lp, $rp); ?> justify-<?php echo $ra; ?>">
                        
                            <div class="w-full lg:w-1/3 2xl:w-5/12 mb-6 lg:mb-0 relative order-1 <?php echo get_sub_field( 'image_alignment' ); ?>">
                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) : ?>
                                    <div class="after:content-[''] after:w-full after:h-full after:bg-brand-main after:absolute after:top-6 after:right-6 after:z-0 after:opacity-25 after:hidden after:lg:flex after:rounded-tr-[5rem] after:rounded-bl-[5rem]">
                                        <img class="w-full h-96 z-1 relative lg:h-auto object-cover lg:object-contain lg:shadow-2xl lg:shadow-brand-black rounded-tr-[2rem] rounded-bl-[2rem] lg:rounded-tr-[5rem] lg:rounded-bl-[5rem]" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="w-full lg:w-2/3 2xl:w-5/12 flex flex-col items-<?php echo $ra; ?> justify-center order-2">

                                <h2 class="text-3xl lg:text-4xl 2xl:text-5xl mb-1 lg:mb-2 font-title tracking-wide"><?php the_sub_field( 'header_content' ); ?></h2>
                                <div class="bg-brand-main h-1 w-12"></div>

                                <?php if ( have_rows( 'paragraphs' ) ) : ?>
                                    <?php while ( have_rows( 'paragraphs' ) ) : the_row(); ?>
                                        <p class="w-full text-base lg:text-lg mt-4"><?php the_sub_field( 'paragraph_content' ); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <?php if ( have_rows( 'list' ) ) : ?>
                                    <ul class="list-none mt-4 2xl:mt-8 text-base 2xl:text-xl">
                                        <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                                            <li class="before:content-['–'] before:mr-4 before:font-bold leading-8"><?php the_sub_field( 'item_text' ); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
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
        </div>
    </section>

<?php endif; ?>