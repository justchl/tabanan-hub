<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tabanan-hub
 */

get_header();
?>
<div class="container px-0 px-md-3 pt-md-4" style="margin-top: 74px">
    <div class="slider single-item">
        <div class="slide-item">
            <img class="w-100" src="<?= get_theme_file_uri('assets/slides/banner-dirumah-aja.jpg'); ?>" alt="Banner Di Rumah Aja" />
        </div>
        <div class="slide-item">
            <img class="w-100" src="<?= get_theme_file_uri('assets/slides/banner-germas.jpg'); ?>" alt="Banner Germas" />
        </div>
        <div class="slide-item">
            <img class="w-100" src="<?= get_theme_file_uri('assets/slides/banner-pengumuman-lomba-foto.jpeg'); ?>" alt="Banner Pengumuman Lomba Foto" />
        </div>
        <div class="slide-item">
            <img class="w-100" src="<?= get_theme_file_uri('assets/slides/banner-talkshow-tabanan-era-baru.jpg'); ?>" alt="Banner Talkshow Tabanan Era Baru" />
        </div>
    </div>
</div>

<div class="container mt-lg-5">
    <!-- Villages - Start -->
    <!-- Title - Start -->
    <div class="section-title mt-5 pb-2 text-center">
        <h4 class="title mb-2">Pesona Desa</h4>
        <p class="subtitle text-muted para-desc mx-auto mb-0">Informasi Desa-desa di Kabupaten Tabanan</p>
    </div>
    <!-- Title - End -->

    <ul class="nav nav-tabs nav-districts pt-3" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab">
                <span>Baturiti</span>
            </a>
        </li>
    </ul>
    <div class="tab-content mt-4">
        <div class="tab-pane fade show active" id="baturiti" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-angseri.jpeg') ?>" class="ratiobox-img card-img-top" alt="Angseri">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Angseri</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Villages - End -->

    <!-- Products - Start -->
    <!-- Title - Start -->
    <div class="section-title mt-5 pb-2 text-center">
        <h4 class="title mb-2">Produk UMKM</h4>
        <p class="subtitle text-muted para-desc mx-auto mb-0">Berbagai Produk UMKM di Kabupaten Tabanan</p>
    </div>
    <!-- Title - End -->

    <!-- Section products - Start -->
    <div class="section-products mt-4">
        <!-- Nav tabs - Start -->
        <ul class="nav row justify-content-center product-tabs mx-n1 mx-md-2" role="tablist">
            <?php 
                $categories = get_categories(array(
                    'exclude' => array(1) // Exclude / hide the uncategories
                ));
                // Loop the categories
                foreach($categories as $categoryIndex => $category){
            ?>
            <li class="col-lg-2 col-4 pt-2 px-1 px-md-2">
                <a class="<?= !$categoryIndex ? 'active' : '' ?>" id="<?= $category->slug ?>-tab" data-toggle="tab" href="<?= '#'.$category->slug; ?>" role="tab" aria-controls="home" aria-selected="true">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body px-0">
                            <div class="icon rounded-circle shadow-lg d-inline-block h3">
                                <?php
                                    if( 'pariwisata' == $category->slug ) $icon = 'uil uil-bed-double';
                                    elseif( 'barang' == $category->slug ) $icon = 'uil uil-airplay';
                                    elseif( 'jasa' == $category->slug ) $icon = 'uil-user-md';
                                ?>
                                <i class="<?= $icon; ?>"></i>
                            </div>
                            <div class="content mt-3">
                                <h6 class="mb-0"><span class="title text-dark"><?= $category->name; ?></span></h6>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
        <!-- Nav tabs - End -->

        <!-- Tab panels - Start -->
        <div class="tab-content" id="myTabContent">
            <?php 
                $categories = get_categories();
                // Loop the categories
                foreach($categories as $categoryIndex => $category){
            ?>
            <div class="tab-pane fade <?= !$categoryIndex ? 'show active' : '' ?>" id="<?= $category->slug ?>" role="tabpanel" aria-labelledby="<?= $category->slug; ?>-tab">
                <div class="row mt-4 mt-md-5">
                    <?php
                    $query = new WP_Query(array(
                        'post_type'      => 'product',
                        'post_status'    => 'publish',
                        'cat'            => $category->cat_ID)
                    );
                        if($query->have_posts()){
                            while ($query->have_posts()){
                                $query->the_post()
                    ?>
                    <div class="col-lg-4 col-md-6 mb-2 pb-2 mt-0 mt-md-2 pt-2">
                        <div class="card card-innerset blog rounded border-0 shadow overflow-hidden h-100">
                            <div class="position-relative ratiobox ratio--16-9">
                                <div class="ratiobox-inner">
                                    <img
                                        src="<?= (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/placeholder/no-image.png' ?>"
                                        class="ratiobox-img card-img-top"
                                        alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
                                    >
                                </div>
                                <a href="<?= the_field('link'); ?>" target="_blank" class="overlay rounded-top bg-dark"></a>
                                <ul class="card-controls list-unstyled shop-icons">
                                    <?php if(get_field('contact_whats_app')) : ?>
                                    <li class="control-button">
                                        <a href="https://api.whatsapp.com/send?phone=<?= the_field('contact_whats_app'); ?>" target="_blank" class="btn btn-icon btn-pills btn-success">
                                            <i class="fab fa-whatsapp fw-n fs-18"></i>
                                        </a>
                                    </li>
                                    <?php endif; ?>

                                    <?php if(get_field('link')) : ?>
                                    <li class="control-button">
                                        <a href="<?= the_field('link'); ?>" target="_blank" class="btn btn-icon btn-pills btn-info">
                                            <i class="fal fa-external-link fw-n fs-14"></i>
                                        </a>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="card-body content">
                                <a href="<?= the_field('link'); ?>" class="h5 card-title title text-dark">
                                    <span><?= the_title(); ?></span>
                                </a>
                                <p class="mt-2"><?= the_field('description'); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    else{
                        echo '<p class="text text-center w-100">Tidak ada product.</p>';
                    } ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- Tab panels - End -->
    </div>
    <!-- Section products - End -->
    <!-- Products - End -->

    <!-- News - Start -->
    <section class="section">
        <div class="container px-0">
            <!-- Title - Start -->
            <div class="section-title mb-4 pb-2 text-center">
                <h4 class="title mb-2">Berita</h4>
                <p class="subtitle text-muted para-desc mx-auto mb-0">Berita seputar TabananHub</p>
            </div>
            <!-- Title - End -->

            <div class="row mt-5">
                <?php
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $query = new WP_Query(array(
                    'post_type'      => 'news',
                    'post_status'    => 'publish',
                    'posts_per_page' => 10,
                    'paged'          => $paged)
                );
                    if($query->have_posts()){
                        while ($query->have_posts()){
                            $query->the_post()
                ?>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden h-100">
                        <a href="<?= the_permalink(); ?>" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img
                                    src="<?= (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/placeholder/no-image.png' ?>"
                                    class="ratiobox-img card-img-top"
                                    alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
                                >
                            </div>
                            <div class="overlay rounded-top bg-dark"></div>
                        </a>
                        <div class="card-body content">
                            <h5><a href="<?= the_permalink(); ?>" class="card-title title text-dark"><?= the_title(); ?></a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item mr-2 mb-0">
                                        <a href="#" class="text-muted like">
                                            <i class="mdi mdi-map-marker"></i>
                                            <span><?= the_field('location'); ?></span>
                                        </a>
                                    </li>
                                </ul>
                                <a href="<?= the_permalink(); ?>" target="_blank" class="text-muted readmore">
                                    <span>Selengkapnya</span><i class="mdi mdi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block">
                                <i class="mdi mdi-account"></i>
                                <span class="text-capitalize"><?= get_the_author_meta( 'display_name', $post->post_author ); ?></span>
                            </small>

                            <small class="text-light date">
                                <i class="mdi mdi-calendar-check"></i>
                                <span><?= get_the_date('d M Y'); ?></span>
                            </small>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                else{
                    echo '<p class="text text-center w-100">Tidak ada berita.</p>';
                } ?>
                <!-- Load more - Start -->
                <!-- <div class="col-12 d-flex justify-content-center">
                    <button type="button" class="btn btn-pills btn-primary-alt">
                        <span>Muat lebih banyak</span>
                    </button>
                </div> -->
                <!-- Load more - End -->
            </div>
        </div>
    </section>
    <!-- News - End -->

    <!-- Founders - Start -->
    <div class="container mb-5 px-0">
        <!-- Title - Start -->
        <div class="section-title pb-2 text-center">
            <h4 class="title mb-2">Pengusung</h4>
        </div>
        <!-- Title - End -->

        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4">
                <div id="founders" class="owl-carousel owl-theme">
                    <div class="media customer-testi m-2">
                        <a href="#" class="d-block ratiobox ratio--4-3">
                            <div class="ratiobox-inner d-flex justify-content-center">
                                <img src="<?= get_theme_file_uri('assets/founders/bakti.jpeg'); ?>" class="ratiobox-img" alt="Bakti">
                            </div>
                        </a>
                    </div>

                    <div class="media customer-testi m-2">
                        <a href="#" class="d-block ratiobox ratio--4-3">
                            <div class="ratiobox-inner d-flex justify-content-center">
                                <img src="<?= get_theme_file_uri('assets/founders/hipmi.jpg'); ?>" class="ratiobox-img" alt="HIPMI">
                            </div>
                        </a>
                    </div>

                    <div class="media customer-testi m-2">
                        <a href="#" class="d-block ratiobox ratio--4-3">
                            <div class="ratiobox-inner d-flex justify-content-center">
                                <img src="<?= get_theme_file_uri('assets/founders/icsb.jpeg'); ?>" class="ratiobox-img" alt="ICSB">
                            </div>
                        </a>
                    </div>

                    <div class="media customer-testi m-2">
                        <a href="#" class="d-block ratiobox ratio--4-3">
                            <div class="ratiobox-inner d-flex justify-content-center">
                                <img src="<?= get_theme_file_uri('assets/founders/jci.jpeg'); ?>" class="ratiobox-img" alt="JCI">
                            </div>
                        </a>
                    </div>

                    <div class="media customer-testi m-2">
                        <a href="#" class="d-block ratiobox ratio--4-3">
                            <div class="ratiobox-inner d-flex justify-content-center">
                                <img src="<?= get_theme_file_uri('assets/founders/ncpi.jpeg'); ?>" class="ratiobox-img" alt="NCPI">
                            </div>
                        </a>
                    </div>

                    <div class="media customer-testi m-2">
                        <a href="#" class="d-block ratiobox ratio--4-3">
                            <div class="ratiobox-inner d-flex justify-content-center">
                                <img src="<?= get_theme_file_uri('assets/founders/phri.jpeg'); ?>" class="ratiobox-img" alt="PHRI">
                            </div>
                        </a>
                    </div>
                    
                    <div class="media customer-testi m-2">
                        <a href="#" class="d-block ratiobox ratio--4-3">
                            <div class="ratiobox-inner d-flex justify-content-center">
                                <img src="<?= get_theme_file_uri('assets/founders/unknown.jpeg'); ?>" class="ratiobox-img" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Founders - End -->

    <!-- Sponsors - Start -->
    <div class="container pt-5 mb-5">
        <!-- Title - Start -->
        <div class="section-title pb-2 text-center">
            <h4 class="title mb-2">Sponsor Utama</h4>
        </div>
        <!-- Title - End -->

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <a href="#" class="sponsor">
                    <img class="sponsor-img" src="<?= get_theme_file_uri('assets/sponsors/bpd-bali.jpg') ?>" alt="Bank BPD Bali" />
                </a>
            </div>
        </div>
    </div>
    <!-- Sponsors - End -->
</div>

<?php
get_footer();
?>