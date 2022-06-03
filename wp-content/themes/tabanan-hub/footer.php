<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tabanan-hub
 */

?>
<footer class="footer pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg col-md-8 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <h4>TabananHub</h4>
                <p class="mt-4">Alamat : Sekber : Tegal Arum Comunity.Jln. Raya Tanah Lot.Br.
                    Batan poh, Pandak Gede, Kediri, Tabanan, Bali, Indonesia 82121</p>
                <p>Email: <a class="mail" href="mailto:tabananhub@gmail.com">tabananhub@gmail.com</a></p>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="d-flex justify-content-center">
                    <img src="<?= get_theme_file_uri('assets/logo/logo-192.png') ?>" alt="TabananHub">
                </div>

                <div class="row mx-n1 justify-content-center mt-4">
                    <div class="px-1 col-auto">
                        <a href="https://www.facebook.com/tabananhub.idIG" target="_blank" class="btn btn-icon btn-icon-lg btn-pills btn-primary d-flex align-items-center justify-content-center">
                            <i class="fab fw-n fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="px-1 col-auto">
                        <a href="https://www.instagram.com/tabananhub" target="_blank"  class="btn btn-icon btn-icon-lg btn-pills btn-danger d-flex align-items-center justify-content-center">
                            <i class="fab fw-n fa-instagram"></i>
                        </a>
                    </div>
                    <div class="px-1 col-auto">
                        <a href="https://api.whatsapp.com/send?phone=6283114111456" target="_blank"  class="btn btn-icon btn-icon-lg btn-pills btn-success d-flex align-items-center justify-content-center">
                            <i class="fab fw-n fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to top - Start -->
<a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top - End -->

<?php get_template_part('footer-bar') ?>
<?php wp_footer(); ?>
</body>
</html>
