<section class="l-banner mt-lg-0">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <!-- swiper -->
                <div class="swiper-container js-swiper-banner">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php if( have_rows( 'banner' ) ) :
                                while( have_rows( 'banner' ) ) : the_row();
                        ?>
                                    <a 
                                    class="swiper-slide"
                                    href="<?php echo get_sub_field( 'link_banner' ) ?>">
                                        <img
                                        class="img-fluid"
                                        src="<?php echo get_sub_field( 'imagem_banner' ) ?>"
                                        alt="">
                                    </a>
                        <?php endwhile;
                            endif;
                        ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>