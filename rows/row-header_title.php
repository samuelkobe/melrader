<?php get_template_part('/parts/spacing_alignment_columns') ?>

<?php if ( get_row_layout() == 'header_title' ) : ?>

    <section class="header-only <?php acf_row_y_margin($tm, $bm); ?>">
        <div class="<?php echo $bg; ?>">
            <div class="mt-6 lg:mt-8 mb-4">
                <div class="container mx-auto px-4 flex justify-center">
                    <div class="<?php acf_row_x_margin($lm, $rm); ?> <?php echo $rc; ?> <?php acf_row_alignment($ra); ?>">
                
                        <div class="flex flex-col <?php acf_row_padding($tp, $bp, $lp, $rp); ?> items-<?php echo $ra; ?>">   

                            <h2 class="text-3xl lg:text-4xl 2xl:text-5xl font-title tracking-wide"><?php the_sub_field( 'content' ); ?></h2>
                            <div class="bg-brand-main h-1 w-12 mt-1 2xl:mt-2"></div>

                        </div>  

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>