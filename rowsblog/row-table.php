
<?php if ( get_row_layout() == 'table' ) : ?>

    <?php $table_colour = get_sub_field( 'table_colour' ); ?>

    <section class="theme-table w-full mb-8 lg:mb-16">    
        <div class="mb-4">
            <div class="container mx-auto">
               
                <div class="w-full h-14 flex items-center justify-start rounded-t bg-brand-<?php echo $table_colour; ?>">
                    <h2 class="text-xl lg:text-2xl 2xl:text-3xl text-white leading-none p-3 pt-4 font-title tracking-wide"><?php the_sub_field( 'table_header' ); ?></h2>
                </div>

                <?php $table = get_sub_field ( 'table' ); ?>
                <?php if ( $table ) : ?>
                    <table class="w-full border-2 border-brand-<?php echo $table_colour; ?>">
                        <?php if ( $table['caption'] ) : ?>
                            <caption><?php echo esc_html( $table['caption'] ); ?></caption>
                        <?php endif; ?>
                        <?php if ( $table['header'] ) : ?>
                            <thead class="border-b-2 border-brand-<?php echo $table_colour; ?>">
                                <tr class="text-xs sm:text-sm lg:text-base xl:text-lg 2xl:text-xl h-14 bg-stone-300">
                                    <?php foreach ( $table['header'] as $th ) : ?>
                                        <th class="border-r-2 border-brand-<?php echo $table_colour; ?> last:border-r-0 px-2 lg:px-0 font-normal"><?php echo esc_html( $th['c'] ); ?></th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                        <?php endif; ?>
                        <tbody class="text-center">
                            <?php foreach ( $table['body'] as $tr ) : ?>
                                <tr class="text-sm md:text-base lg:text-xl h-14 even:bg-brand-gray">
                                    <?php foreach ( $tr as $td ) : ?>
                                        <td class="border-r-2 border-brand-<?php echo $table_colour; ?> last:border-r-0"><?php echo esc_html( $td['c'] ); ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>

            </div>
        </div>
    </section>
    
<?php endif; ?>
