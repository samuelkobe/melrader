<?php get_template_part('/parts/spacing_alignment_columns') ?>

<?php if ( get_row_layout() == 'image' ) : ?>

    <section class="<?php acf_row_y_margin($tm, $bm); ?>">
        <div class="<?php echo $bg; ?>">
            <div class="mb-4">
                <div class="container lg:mx-auto flex justify-center">
                    <div class="<?php acf_row_x_margin($lm, $rm); ?> <?php echo $rc; ?> <?php acf_row_alignment($ra); ?>">
                
                        <div class="flex flex-col <?php acf_row_padding($tp, $bp, $lp, $rp); ?> items-<?php echo $ra; ?>">                    
                            
                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( $image ) : ?>
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            <?php endif; ?>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php endif; ?>