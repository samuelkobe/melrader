<?php get_template_part('/parts/spacing_alignment_columns') ?>

    <section class="faq-row pt-4 <?php acf_row_y_margin($tm, $bm); ?> <?php acf_row_x_margin($lm, $rm); ?> Helo">
        <div class="<?php echo $bg; ?>">
            <div class="<?php echo $bg_spacing; ?>">
                <div class="container mx-auto flex justify-center">
                    <div class=" <?php echo $rc; ?> <?php acf_row_alignment($ra); ?>">
                        
                        <div class="flex flex-col <?php acf_row_padding($tp, $bp, $lp, $rp); ?> items-<?php echo $ra; ?>">

                            <h2 class="text-xl lg:text-2xl 2xl:text-4xl mb-1 lg:mb-2 font-title tracking-wide"><?php the_sub_field( 'video_title' ); ?></h2>
                            <div class="bg-brand-main h-1 w-12 mb-4 lg:mb-6"></div>

                            <div class="w-full mg:w-1/3 shadow-xl">

                                <div class="flex flex-col w-full relative rounded overflow-hidden">
                                    <div class="video-embed w-full">
                                        <?php the_sub_field( 'video_embed' ); ?>
                                    </div>
                                </div>

                            </div>
        
                        </div>  

                    </div>  
                </div>  
            </div>
        </div>
    </section>