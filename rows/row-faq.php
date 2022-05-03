<?php get_template_part('/parts/spacing_alignment_columns') ?>

<section class="faq-row pt-4 <?php acf_row_y_margin($tm, $bm); ?> <?php acf_row_x_margin($lm, $rm); ?> Helo">
    <div class="<?php echo $bg; ?>">
        <div class="<?php echo $bg_spacing; ?>">
            <div class="container mx-auto px-4 2xl:px-8 flex justify-center">
                <div class=" <?php echo $rc; ?> <?php acf_row_alignment($ra); ?>">
                    
                    <div class="flex flex-col <?php acf_row_padding($tp, $bp, $lp, $rp); ?> items-<?php echo $ra; ?>">
                            <?php
                                $faq_count = 0;
                                if ( have_rows( 'faqs' ) ) : 
                            ?>
                                <div class="flex flex-col w-full md:w-5/6 md:mx-1/12 border-t-2 border-grey-light">
                                    <?php while ( have_rows( 'faqs' ) ) : the_row(); ?>             
                                        <div class="faq-item flex flex-col w-full relative border-b-2 border-grey-light py-6 <?php if ($faq_count == 0) : echo 'open'; else : endif; ?>">
                                            <h3 class="w-5/6 sm:w-11/12 text-2xl xl:text-3xl font-title font-semibold text-brand-dark my-2 xl:my-4 relative after:transform after:transition-all after:duration-500 after:rotate-180 tracking-wide"><?php the_sub_field( 'question' ); ?></h3>
                                            <p class="w-11/12 text-grey-dark text-base lg:text-lg"><?php the_sub_field( 'answer' ); ?></p>
                                        </div>
                                    <?php $faq_count++;
                                    endwhile; ?>
                                </div>
                        <?php endif; ?>
                    </div>  

                </div>  
            </div>  
        </div>
    </div>
</section>