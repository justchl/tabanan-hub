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
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#baturiti" role="tab">
                <span>Baturiti</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#kediri" role="tab">
                <span>Kediri</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#kerambitan" role="tab">
                <span>Kerambitan</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#marga" role="tab">
                <span>Marga</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#penebel" role="tab">
                <span>Penebel</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#pupuan" role="tab">
                <span>Pupuan</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#selemadeg" role="tab">
                <span>Selemadeg</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#selemadegtimur" role="tab">
                <span>Selemadeg Timur</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#selemadegbarat" role="tab">
                <span>Selemadeg Barat</span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#tabanan" role="tab">
                <span>Tabanan</span>
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
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-angseri.jpeg') ?>" class="ratiobox-img card-img-top" alt="Desa Angseri">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Angseri</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-antapan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Desa Antapan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Antapan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-apuan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Desa Apuan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Apuan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-bangli.jpeg') ?>" class="ratiobox-img card-img-top" alt="Desa Bangli">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Bangli</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-batunya.jpeg') ?>" class="ratiobox-img card-img-top" alt="Desa Batunya">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Batunya</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-baturiti.jpeg') ?>" class="ratiobox-img card-img-top" alt="Desa Baturiti">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Baturiti</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-candikuning.jpg') ?>" class="ratiobox-img card-img-top" alt="Desa Candikuning">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Candikuning</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-luwus.jpg') ?>" class="ratiobox-img card-img-top" alt="Desa Luwus">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Luwus</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-mekarsari.jpeg') ?>" class="ratiobox-img card-img-top" alt="Desa Mekarsari">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Mekarsari</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-perean.jpg') ?>" class="ratiobox-img card-img-top" alt="Desa Perean">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Perean</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-perean-kangin.jpg') ?>" class="ratiobox-img card-img-top" alt="Desa Perean Kangin">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Perean Kangin</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/baturiti/desa-perean-tengah.jpg') ?>" class="ratiobox-img card-img-top" alt="Desa Perean Tengah">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Perean Tengah</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="kediri" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-abian-tuwung.jpeg') ?>" class="ratiobox-img card-img-top" alt="Abian Tuwung">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Abian Tuwung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-banjar-anyar.jpeg') ?>" class="ratiobox-img card-img-top" alt="Banjar Anyar">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Banjar Anyar</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-belalang.jpg') ?>" class="ratiobox-img card-img-top" alt="Belalang">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Belalang</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-bengkel.jpeg') ?>" class="ratiobox-img card-img-top" alt="Bengkel">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Bengkel</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-beraban.jpeg') ?>" class="ratiobox-img card-img-top" alt="Beraban">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Beraban</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-buwit.jpg') ?>" class="ratiobox-img card-img-top" alt="Buwit">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Buwit</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-cepaka.jpg') ?>" class="ratiobox-img card-img-top" alt="Cepaka">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Cepaka</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-kaba-kaba.jpeg') ?>" class="ratiobox-img card-img-top" alt="Kaba-Kaba">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Kaba-Kaba</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-kediri.jpeg') ?>" class="ratiobox-img card-img-top" alt="Kediri">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Kediri</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-nyambu.jpg') ?>" class="ratiobox-img card-img-top" alt="Nyambu">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Nyambu</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-nyitdah.jpeg') ?>" class="ratiobox-img card-img-top" alt="Nyitdah">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Nyitdah</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-pandak-bandung.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pandak Badung">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pandak Bandung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-pandak-gede.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pandak Gede">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pandak Gede</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-pangkung-tibah.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pangkung Tibah">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pangkung Tibah</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kediri/desa-pejaten.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pejaten">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pejaten</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="kerambitan" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-batuaji.jpeg') ?>" class="ratiobox-img card-img-top" alt="Batuaji">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Batuaji</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-baturiti.jpeg') ?>" class="ratiobox-img card-img-top" alt="Baturiti">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Baturiti</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-belumbang.jpg') ?>" class="ratiobox-img card-img-top" alt="Belumbang">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Belumbang</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-kelating.jpeg') ?>" class="ratiobox-img card-img-top" alt="Kelating">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Kelating</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-kerambitan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Kerambitan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Kerambitan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-kesiut.jpeg') ?>" class="ratiobox-img card-img-top" alt="Kesiut">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Kesiut</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-kukuh.jpeg') ?>" class="ratiobox-img card-img-top" alt="Kukuh">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Kukuh</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-meliling.jpeg') ?>" class="ratiobox-img card-img-top" alt="Meliling">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Meliling</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-pangkung-karung.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pangkung Karung">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pangkung Karung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-penarukan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Penarukan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Penarukan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-samsam.jpg') ?>" class="ratiobox-img card-img-top" alt="Samsam">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Samsam</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-sembung-gede.jpeg') ?>" class="ratiobox-img card-img-top" alt="Sembung Gede">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Sembung Gede</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-tibubiu.jpeg') ?>" class="ratiobox-img card-img-top" alt="Tibubiu">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tibubiu</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-timpang.jpeg') ?>" class="ratiobox-img card-img-top" alt="Timpang">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Timpang</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/kerambitan/desa-tista.jpg') ?>" class="ratiobox-img card-img-top" alt="Tista">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tista</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="marga" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-baru.jpeg') ?>" class="ratiobox-img card-img-top" alt="Baru">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Baru</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-batanyuh.jpeg') ?>" class="ratiobox-img card-img-top" alt="Batannyuh">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Batannyuh</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-beringkit.jpeg') ?>" class="ratiobox-img card-img-top" alt="Beringkit">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Beringkit</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-cau-belayu.jpeg') ?>" class="ratiobox-img card-img-top" alt="Cau Belayu">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Caubelayu</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-geluntung.jpeg') ?>" class="ratiobox-img card-img-top" alt="Geluntung">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Geluntung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-kukuh.jpeg') ?>" class="ratiobox-img card-img-top" alt="Kukuh">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Kukuh</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-kuwum.jpeg') ?>" class="ratiobox-img card-img-top" alt="Kuwum">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Kuwum</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-marga.jpeg') ?>" class="ratiobox-img card-img-top" alt="Marga">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Marga</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-marga-dajan-puri.jpeg') ?>" class="ratiobox-img card-img-top" alt="Marga Dajan Puri">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Marga Dajan Puri</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-marga-dauh-puri.jpeg') ?>" class="ratiobox-img card-img-top" alt="Marga Dauh Puri">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Marga Dauh Puri</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-payangan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Payangan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Payangan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-peken.jpeg') ?>" class="ratiobox-img card-img-top" alt="Peken">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Peken</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-petiga.jpg') ?>" class="ratiobox-img card-img-top" alt="Petiga">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Petiga</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-selanbawak.jpeg') ?>" class="ratiobox-img card-img-top" alt="Selanbawak">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Selanbawak</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-tegaljadi.jpeg') ?>" class="ratiobox-img card-img-top" alt="Tegaljadi">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tegaljadi</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/marga/desa-tua.jpeg') ?>" class="ratiobox-img card-img-top" alt="Tua">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tua</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="penebel" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-babahan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Babahan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Babahan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-biaung.jpeg') ?>" class="ratiobox-img card-img-top" alt="Biaung">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Biaung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-buruan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Buruan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Buruan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-jatiluwih.jpeg') ?>" class="ratiobox-img card-img-top" alt="Jatiluwih">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Jatiluwih</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-jegu.jpeg') ?>" class="ratiobox-img card-img-top" alt="Jegu">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Jegu</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-mengeste.jpeg') ?>" class="ratiobox-img card-img-top" alt="Mengeste">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Mengeste</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-penatahan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Penatahan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Penatahan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-penebel.jpeg') ?>" class="ratiobox-img card-img-top" alt="Penebel">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Penebel</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-pesagi.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pesagi">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pesagi</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-pitra.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pitra">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pitra</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-rejasa.jpg') ?>" class="ratiobox-img card-img-top" alt="Rejasa">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Rejasa</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-rianggede.jpg') ?>" class="ratiobox-img card-img-top" alt="Riang Gede">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Riang Gede</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-sangketan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Sangketan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Sangketan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-senganan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Senganan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Senganan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-tajen.jpeg') ?>" class="ratiobox-img card-img-top" alt="Tajen">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tajen</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-tegalinggah.jpg') ?>" class="ratiobox-img card-img-top" alt="Tegalinggah">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tegalinggah</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-tengkudak.jpeg') ?>" class="ratiobox-img card-img-top" alt="Tengkudak">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tengkudak</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/penebel/desa-wongayagede.jpeg') ?>" class="ratiobox-img card-img-top" alt="Wongayagede">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Wongaya Gede</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="pupuan" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-bantiran.jpg') ?>" class="ratiobox-img card-img-top" alt="Bantiran">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Bantiran</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-batungsel.jpeg') ?>" class="ratiobox-img card-img-top" alt="Batungsel">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Batungsel</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-belatungan.jpg') ?>" class="ratiobox-img card-img-top" alt="Belatungan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Belatungan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-belimbing.jpg') ?>" class="ratiobox-img card-img-top" alt="Belimbing">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Belimbing</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-jelijih-punggang.jpeg') ?>" class="ratiobox-img card-img-top" alt="Jelijih Punggang">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Jelijih Punggang</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-karya-sari.jpeg') ?>" class="ratiobox-img card-img-top" alt="Karya Sari">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Karya Sari</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-kebon-padangan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Kebon Padangan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Kebon Padangan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-munduk-temu.jpeg') ?>" class="ratiobox-img card-img-top" alt="Munduk Temu">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Munduk Temu</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-padangan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Padangan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Padangan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-pajahan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pajahan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pajahan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-pujungan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pujungan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pujungan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-pupuan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pupuan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pupuan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-sai.jpeg') ?>" class="ratiobox-img card-img-top" alt="Sai">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Sai</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/pupuan/desa-sanda.jpeg') ?>" class="ratiobox-img card-img-top" alt="Sanda">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Sanda</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="selemadeg" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-antap.jpeg') ?>" class="ratiobox-img card-img-top" alt="Antap">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Antap</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-bajera.jpg') ?>" class="ratiobox-img card-img-top" alt="Bajera">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Bajera</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-bajera-utara.jpeg') ?>" class="ratiobox-img card-img-top" alt="Bajera Utara">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Bajera Utara</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-berembeng.jpg') ?>" class="ratiobox-img card-img-top" alt="Berembeng">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Berembeng</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-manikyang.jpg') ?>" class="ratiobox-img card-img-top" alt="Manikyang">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Manikyang</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-pupuan-sawah.jpeg') ?>" class="ratiobox-img card-img-top" alt="Pupuan Sawah">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Pupuan Sawah</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-selemadeg.jpeg') ?>" class="ratiobox-img card-img-top" alt="Selemadeg">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Selemadeg</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-serampingan.jpg') ?>" class="ratiobox-img card-img-top" alt="Serampingan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Serampingan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-wanagiri.jpeg') ?>" class="ratiobox-img card-img-top" alt="Wanagiri">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Wanagiri</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg/desa-wanagiri-kauh.jpeg') ?>" class="ratiobox-img card-img-top" alt="Wanagiri Kauh">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Wanagiri Kauh</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="selemadegtimur" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-bantas.jpeg') ?>" class="ratiobox-img card-img-top" alt="Bantas">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Bantas</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-beraban.jpeg') ?>" class="ratiobox-img card-img-top" alt="Beraban">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Beraban</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-dalang.jpeg') ?>" class="ratiobox-img card-img-top" alt="Dalang">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Dalang</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-gadung-sari.jpg') ?>" class="ratiobox-img card-img-top" alt="Gadung Sari">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Gadung Sari</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-gadungan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Gadungan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Gadungan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-gunung-salak.jpeg') ?>" class="ratiobox-img card-img-top" alt="Gunung Salak">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Gunung Salak</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-mambang.jpeg') ?>" class="ratiobox-img card-img-top" alt="Mambang">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Mambang</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-megati-kelod.jpeg') ?>" class="ratiobox-img card-img-top" alt="Megati">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Megati</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-tangguntiti.jpeg') ?>" class="ratiobox-img card-img-top" alt="Tangguntiti">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tangguntiti</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-timur/desa-tegal-mengkeb.jpeg') ?>" class="ratiobox-img card-img-top" alt="Tegal Mengkeb">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tegal Mengkeb</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="selemadegbarat" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-angkah.jpeg') ?>" class="ratiobox-img card-img-top" alt="Angkah">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Angkah</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-antosari.jpg') ?>" class="ratiobox-img card-img-top" alt="Antosari">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Antosari</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-bengkel-sari.jpeg') ?>" class="ratiobox-img card-img-top" alt="Bengkel Sari">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Bengkel Sari</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-lalang-linggah.jpg') ?>" class="ratiobox-img card-img-top" alt="Lalang Linggah">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Lalang Linggah</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-lumbung.jpg') ?>" class="ratiobox-img card-img-top" alt="Lumbung">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Lumbung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-lumbung-kauh.jpeg') ?>" class="ratiobox-img card-img-top" alt="Lumbung Kauh">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Lumbung Kauh</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-mundeh.jpeg') ?>" class="ratiobox-img card-img-top" alt="Mundeh">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Mundeh</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-mundeh-kangin.jpg') ?>" class="ratiobox-img card-img-top" alt="Mundeh Kangin">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Mundeh Kangin</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-mundeh-kauh.jpeg') ?>" class="ratiobox-img card-img-top" alt="Mundeh Kauh">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Mundeh Kauh</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-selabih.jpeg') ?>" class="ratiobox-img card-img-top" alt="Selabih">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Selabih</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/selemadeg-barat/desa-tiying-gading.jpeg') ?>" class="ratiobox-img card-img-top" alt="Tiying Gading">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tiying Gading</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="tabanan" role="tabpanel">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-boongan.jpg') ?>" class="ratiobox-img card-img-top" alt="Boongan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Boongan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-buahan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Buahan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Buahan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-dauh-peken.jpeg') ?>" class="ratiobox-img card-img-top" alt="Dauh Peken">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Dauh Peken</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-dajan-peken.jpeg') ?>" class="ratiobox-img card-img-top" alt="Dajan Peken">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Dajan Peken</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-delod-peken.jpg') ?>" class="ratiobox-img card-img-top" alt="Delod Peken">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Delod Peken</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-denbantas.jpeg') ?>" class="ratiobox-img card-img-top" alt="Denbantas">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Denbantas</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-gubug.jpeg') ?>" class="ratiobox-img card-img-top" alt="Gubug">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Gubug</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-sesandan.jpeg') ?>" class="ratiobox-img card-img-top" alt="Sesandan">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Sesandan</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-subamia.jpeg') ?>" class="ratiobox-img card-img-top" alt="Subamia">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Subamia</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-sudimara.jpeg') ?>" class="ratiobox-img card-img-top" alt="Sudimara">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Sudimara</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-tunjuk.jpeg') ?>" class="ratiobox-img card-img-top" alt="Tunjuk">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Tunjuk</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pb-2">
                    <div class="card card-village blog rounded border-0 shadow overflow-hidden">
                        <a href="#" target="_blank" class="position-relative ratiobox ratio--16-9">
                            <div class="ratiobox-inner">
                                <img src="<?= get_theme_file_uri('assets/villages/tabanan/desa-wanasari.jpeg') ?>" class="ratiobox-img card-img-top" alt="Wanasari">
                            </div>
                        </a>
                        <div class="card-body content py-2 text-center">
                            <a href="#" target="_blank" class="fs-16 card-title title text-dark">
                                <span>Wanasari</span>
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