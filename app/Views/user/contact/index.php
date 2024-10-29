<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white text-shadow"><?php echo lang('Blog.titleOurContact');
                                                // if (!empty($perusahaan)) {
                                                //     echo ' | ' . $perusahaan->nama_perusahaan;
                                                //} 
                                                ?></h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase text-shadow"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span class="text-shadow"><?php echo lang('Blog.headerContact'); ?></span>
        </div>
    </div>
</div>
<!-- Page Header End -->

<br><br>

<!-- Contact Section Start -->
<section class="contact-section">
    <div class="container">
        <div class="d-flex flex-column text-center mb-5">
            <h3 class="mb-4 p-1 bg-primary text-white rounded text-center"><?php echo lang('Blog.ContactDesc'); ?></h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-5">
                <div class="map">
                    <?php foreach ($profil as $maps) : ?>
                        <?= $maps->link_maps ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card shadow-sm p-3">
                    <div class="card-body text-center">
                        <?php foreach ($profil as $desc) : ?>
                            <blockquote class="blockquote text-primary">
                                <i class="fa fa-map-marker-alt fa-lg mb-3" aria-hidden="true"></i>
                                <p class="mb-0" style="font-size: 1.2rem;">
                                    <?php if (lang('Blog.Languange') == 'en') {
                                        echo $desc->deskripsi_kontak_en;
                                    } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $desc->deskripsi_kontak_in;
                                    } ?>
                                </p>
                            </blockquote>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Social Media Links -->
                <!-- <div class="social-icons mt-5 text-center">
                    <a href="https://www.instagram.com" target="_blank" class="text-primary mr-3"><i class="fab fa-instagram fa-4x"></i></a>
                    <a href="https://www.twitter.com" target="_blank" class="text-primary mr-3"><i class="fab fa-twitter fa-4x"></i></a>
                    <a href="https://www.facebook.com" target="_blank" class="text-primary mr-3"><i class="fab fa-facebook fa-4x"></i></a>
                    <a href="mailto:your-email@example.com" class="text-primary"><i class="fa fa-envelope fa-4x"></i></a>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Custom Styles -->
<style>
    .map {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        overflow: hidden;
    }

    .card {
        border-radius: 15px;
        max-width: 500px;
        /* Adjust the width of the contact card as needed */
        margin: auto;
        /* Center the card */
    }

    .card-body {
        padding: 1.5rem;
    }

    .blockquote {
        font-size: 1.2rem;
        /* Increase the font size */
        text-align: center;
        /* Center align the text */
    }

    .fa-map-marker-alt {
        color: #3684c6;
        /* Change the color of the icon */
        display: block;
        margin: auto;
        /* Center the icon */
    }

    .social-icons a {
        color: #3684c6;
        /* Change the color of the social media icons */
    }

    .social-icons a:hover {
        color: #0056b3;
        /* Change the hover color of the social media icons */
    }

    .social-icons .fa {
        margin: 15px;
    }

    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
        /* Add text shadow */
    }
</style>

<?= $this->endSection('content'); ?>