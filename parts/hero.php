<?php if ( have_rows( 'hero' ) ): ?>
	<?php while ( have_rows( 'hero' ) ) : the_row(); ?>

        <?php if ( get_sub_field( 'page_hero' ) == 1 ) : // this checks to see if the page hero is active. If not use some inline JS to account for header menu spacing.?>
            
        <?php
            $background_image = get_sub_field( 'background_image' );
            $background_video = get_sub_field( 'background_video' );
            $button = 'button accent mt-4 md:mt-8 mb-2';
            if ( get_sub_field( 'page_hero_height' ) == 1 ) :
                $hero_height = 'h-[360px] sm:h-[65vh] lg:h-[90vh] sm:min-h-[360px] md:min-h-[480px] xl:min-h-[640px]';
            else :
                $hero_height = 'h-[25vh] lg:h-[35vh] 2xl:h-[55vh] min-h-[240px] md:min-h-[360px] xl:min-h-[480px]';
            endif;
            if ( have_rows( 'background_blend_colour' ) ) :
                while ( have_rows( 'background_blend_colour' ) ) : the_row();
                $colour = get_sub_field( 'colours' );
                switch ($colour) {
                    case 'main':
                        $bg_colour = 'bg-brand-main';
                        $img_vid_blend = 'mix-blend-luminosity';
                        break;
                    case 'alt':
                        $bg_colour = 'bg-brand-alt';
                        $img_vid_blend = 'mix-blend-luminosity';
                        break;
                    case 'black':
                        $bg_colour = 'bg-brand-black';
                        $img_vid_blend = 'mix-blend-luminosity';
                        break;
                    case 'none':
                        $bg_colour = 'bg-transparent';
                        $img_vid_blend = 'mix-blend-normal';
                        break;
                    default:
                        $bg_colour = 'bg-transparent';
                        $img_vid_blend = 'mix-blend-normal';
                        break;
                }
                    
                endwhile; 
            endif;
            $video = '<video
                            class="absolute top-0 left-0 w-full h-full object-cover ' . $img_vid_blend . '"
                            preload="metadata"
                            muted
                            autoplay
                            loop
                            playsinline
                            src="' . $background_video . '"
                            type="video/mp4">
                            Sorry, your browser doesn\'t support embedded videos.
                        </video>';
        ?>
    
            <section class="flex relative w-full px-4 2xl:px-0 overflow-hidden <?php echo $hero_height . " " . $bg_colour ?>">
                <div class="absolute left-0 top-0 h-full w-full bg-brand-black z-10 opacity-50 pointer-events-none"></div>
                <div class="absolute w-full hidden sm:flex flex-row justify-center bottom-8 lg:bottom-12 h-auto z-30">
                    <button @click="goto('topOfContent')" class="text-4xl text-white border-2 border-white drop-shadow rounded-full p-3 lg:p-4 motion-safe:animate-[bounce_1s_ease-out_12]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 lg:h-8 w-4 lg:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </button>
                </div>
                <?php if ( get_sub_field( 'background_type' ) == 1 ) : ?>
                    <?php if ( $background_image ) : ?>
                        <img class="absolute left-0 w-full h-full object-cover <?php echo $img_vid_blend; ?>" src="<?php echo esc_url( $background_image['url'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" />
                    <?php endif; ?> 
                <?php else : ?>
                    <?php echo $video;?>
                <?php endif; ?>

                <div class="w-full py-8 md:py-16 lg:mt-0 flex flex-wrap 2xl:container 2xl:mx-auto items-center justify-start relative z-20 text-white">

                    <div class="w-full 2xl:w-2/3 md:self-center md:h-1/2 mt-8">

                        <h1 class="lg:leading-normal text-xl sm:text-2xl md:text-3xl xl:text-4xl w-full xl:w-3/4 font-light"><?php the_sub_field( 'hero_subtitle' ); ?></h1>
                        <h2 class="font-title text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl leading-none lg:leading-tight xl:leading-snug tracking-wider lg:tracking-normal"><?php the_sub_field( 'hero_title' ); ?></h2>
                        
                        <div class="flex flex-row relative">
                            <?php if ( get_sub_field( 'button_toggle' ) == 1 ) : ?>
                                <?php $button_link = get_sub_field( 'button_link' ); ?>            
                                <?php if ( $button_link ) : ?>
                                <div class="flex flex-row relative">
                                    <a class="<?php echo $button; ?>" href="<?php echo esc_url( $button_link['url'] ); ?>" target="<?php echo esc_attr( $button_link['target'] ); ?>"><?php echo esc_html( $button_link['title'] ); ?></a>
                                </div>
                                <?php endif; ?>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </section>


        <?php else : ?>

            <section class="mt-4 xl:mt-16 pt-28 xl:mb-6">
                <div class="flex contained">
                    <h1 class="text-3xl sm:text-4xl xl:text-5xl xl:leading-snug mb-6 lg:mb-16 font-bold font-title text-brand-black lg:text-center"><?php the_title(); ?></h1>
                </div>
            </section>

        <?php endif; ?>

	<?php endwhile; ?>
<?php else: ?>
	<p class="bg-slate-200 text-4xl p-4">Hero not setup yet. Talk to your web admin.</p>
<?php endif; ?>