<?php
get_header();
?>

<!-- Content hero - Start -->
<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="page-next-level">
                    <h2><?= the_title(); ?></h2>

                    <ul class="list-unstyled mt-4">
                        <?php if(get_field('location')) : ?>
                            <li class="list-inline-item h6 user text-muted mr-2">
                                <i class="mdi mdi-map-marker"></i>
                                <span><?= the_field('location'); ?></span>
                            </li>
                        <?php endif; ?>

                        <li class="list-inline-item h6 date text-muted">
                            <i class="mdi mdi-calendar-check"></i>
                            <span><?= get_the_date('d M Y'); ?></span>
                        </li>

                    </ul>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="<?= home_url(); ?>">Home</a></li>
                                <?php 
                                /**
                                 * <li class="breadcrumb-item"><a href="<?= home_url() ?>/berita">Berita</a></li> 
                                 */
                                ?>
                                <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content hero - End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- Post container - Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- Post content - Start -->
            <div class="col-lg-8 col-md-6">
                <div class="card blog blog-detail border-0 shadow rounded">
                    <div class="position-relative ratiobox ratio--16-9">
                        <div class="ratiobox-inner">
                            <img
                                src="<?= (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/placeholder/no-image.png' ?>"
                                class="ratiobox-img rounded-top"
                                alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
                            >
                        </div>
                    </div>

                    <div class="card-body content">
                        <?php if(!empty(the_field('content'))) : ?>
                            <div class="post-content text-muted"><?= the_field('content'); ?></div>
                        <?php endif; ?>

                        <div class="post-meta mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted comments">
                                        <i class="mdi mdi-account"></i>
                                        <span class="text-capitalize"><?= get_the_author_meta( 'display_name', $post->post_author ); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Related posts - Start -->
                <div class="card shadow rounded border-0 mt-4">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Berita Terkait</h5>                                
                        <div class="row">
                            <?php
                            $query = new WP_Query(array(
                                'post_type'      => 'news',
                                'post_status'    => 'publish',
                                'order'          => 'DESC',
                                'posts_per_page' => 2)
                            );
                                if($query->have_posts()){
                                    while ($query->have_posts()){
                                        $query->the_post()
                            ?>
                            <div class="col-lg-6 mt-4 pt-2">
                                <div class="card blog rounded border-0 shadow overflow-hidden h-100">
                                    <a href="<?= the_permalink(); ?>" class="d-block position-relative ratiobox ratio--16-9">
                                        <div class="ratiobox-inner">
                                            <img
                                                src="<?= (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/placeholder/no-image.png' ?>"
                                                class="ratiobox-img card-img-top rounded-top"
                                                alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
                                            >
                                        </div>
                                        <div class="overlay rounded-top bg-dark"></div>
                                    </a>

                                    <div class="card-body content">
                                        <h5><a href="<?= the_permalink(); ?>" class="card-title title text-dark"><?= the_title(); ?></a></h5>
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                
                                                <?php if(!empty(the_field('location'))) : ?>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="text-muted comments">
                                                            <i class="mdi mdi-map-marker"></i>
                                                            <span><?= the_field('location'); ?></span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>

                                            </ul>
                                            <a href="<?= the_permalink(); ?>" class="text-muted readmore">Selengkapnya <i class="mdi mdi-chevron-right"></i></a>
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
                        </div>
                    </div>
                </div>
                <!-- Related posts - End -->
            </div>
            <!-- Post content - End -->

            <!-- Post Sidebar - Start -->
            <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 sidebar sticky-bar rounded shadow">
                    <div class="card-body">

                        <!-- Search box - Start -->
                        <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Pencarian Berita</h4>
                            <div id="search2" class="widget-search mt-4 mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="border rounded" name="s" id="s" placeholder="Pencarian ...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Search box - End -->

                        <!-- Latest news - Start -->
                        <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Berita Terbaru</h4>
                            <div class="mt-4">
                                <?php
                                $query = new WP_Query(array(
                                    'post_type'      => 'news',
                                    'post_status'    => 'publish',
                                    'order'          => 'DESC',
                                    'posts_per_page' => 3)
                                );
                                    if($query->have_posts()){
                                        while ($query->have_posts()){
                                            $query->the_post()
                                ?>
                                <div class="clearfix post-recent d-flex align-items-center">
                                    <div class="post-recent-thumb float-left">
                                        <a href="<?= the_permalink(); ?>" class="d-block position-relative ratiobox ratio--16-9">
                                            <div class="ratiobox-inner">
                                                <img
                                                    src="<?= (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/placeholder/no-image.png' ?>"
                                                    class="ratiobox-img rounded"
                                                    alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
                                                >
                                            </div>
                                        </a>
                                    </div>
                                    <div class="post-recent-content float-left">
                                        <a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
                                        <span class="text-muted mt-2"><?= get_the_date('d M Y'); ?></span>
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                                else{
                                    echo '<p class="text text-center w-100">Tidak ada berita.</p>';
                                } ?>
                            </div>
                        </div>
                        <!-- Latest news - End -->
                        
                        <!-- Social accounts - Start -->
                        <div class="widget">
                            <h4 class="widget-title">Ikuti Kami</h4>
                            <div class="row mx-n1 mt-4">
                                <?php
                                /*
                                <div class="px-1 col-auto">
                                    <a href="https://www.facebook.com/tabananhub.idIG" target="_blank" 
                                        class="btn btn-icon btn-pills btn-outline-primary d-flex align-items-center justify-content-center">
                                        <i class="fab fw-n fa-facebook-f"></i>
                                    </a>
                                </div>
                                <div class="px-1 col-auto">
                                    <a href="https://www.instagram.com/tabananhub" target="_blank" 
                                        class="btn btn-icon btn-pills btn-outline-danger d-flex align-items-center justify-content-center">
                                        <i class="fab fw-n fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="px-1 col-auto">
                                    <a href="https://api.whatsapp.com/send?phone=6283114111456" target="_blank" 
                                        class="btn btn-icon btn-pills btn-outline-success d-flex align-items-center justify-content-center">
                                        <i class="fab fw-n fa-whatsapp"></i>
                                    </a>
                                </div>
                                 */
                                ?>
                                <div class="px-1 col-auto">
                                    <a href="https://www.youtube.com/@tabananhub4037/videos" target="_blank" 
                                        class="btn btn-icon btn-pills btn-outline-danger d-flex align-items-center justify-content-center">
                                        <i class="fab fw-n fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Social accounts - End -->
                    </div>
                </div>
            </div>
            <!-- Post Sidebar - End -->
        </div>
    </div>
</section>
<!-- Post container - End -->

<?php
get_footer();
?>