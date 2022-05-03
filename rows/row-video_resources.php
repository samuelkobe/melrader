<?php get_template_part('/parts/spacing_alignment_columns') ?>

    <section class="faq-row pt-4 <?php acf_row_y_margin($tm, $bm); ?> <?php acf_row_x_margin($lm, $rm); ?> Helo">
        <div class="<?php echo $bg; ?>">
            <div class="<?php echo $bg_spacing; ?>">
                <div class="container mx-auto px-4 2xl:px-8 flex justify-center">
                    <div class=" <?php echo $rc; ?> <?php acf_row_alignment($ra); ?>">
                        
                        <div class="flex flex-col <?php acf_row_padding($tp, $bp, $lp, $rp); ?> items-<?php echo $ra; ?>">

                            <h2 class="text-xl lg:text-2xl 2xl:text-4xl mb-1 lg:mb-2 font-title tracking-wide"><?php the_sub_field( 'video_resources_header' ); ?></h2>
                            <div class="bg-brand-alt h-1 w-12"></div>

                            <?php if ( have_rows( 'video' ) ) : ?>                                
                                <div class="w-full inline-flex flex-col lg:flex-row gap-4 mt-4 lg:mt-8">
                                    <?php while ( have_rows( 'video' ) ) : the_row(); ?>

                                        <div class="w-full mg:w-1/3 shadow-xl">

                                            <div class="flex flex-col w-full relative rounded overflow-hidden">
                                                <div class="video-embed w-full relative">
                                                    <?php the_sub_field( 'video_embed' ); ?>
                                                    <div class="absolute left-0 pl-2 lg:pl-6 -bottom-1 h-auto w-full z-10 pointer-events-none">
                                                        <h3 class="text-xl xl:text-2xl xl:leading-snug mb-2 xl:mb-4 font-title font-semibold text-white"><?php the_sub_field( 'title' ); ?></h3>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
        
                        </div>  

                    </div>  
                </div>  
            </div>
        </div>
    </section>