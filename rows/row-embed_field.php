<?php get_template_part('/parts/spacing_alignment_columns') ?>

<?php if ( get_row_layout() == 'embed_field' ) : ?>

    <section class="embed-field <?php acf_row_y_margin($tm, $bm); ?>">
        <div class="<?php echo $bg; ?>">
            <div class="mb-4">
                <div class="container mx-auto px-4 flex justify-center">
                    <div class="<?php acf_row_x_margin($lm, $rm); ?> <?php echo $rc; ?> <?php acf_row_alignment($ra); ?>">
                
                        <div class="flex flex-col <?php acf_row_padding($tp, $bp, $lp, $rp); ?> items-<?php echo $ra; ?>">                    
                            
                            <p class="text-base lg:text-lg"><?php the_sub_field( 'embed_field' ); ?></p>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php endif; ?>