<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>
<!-- END slider -->

<div class="container-fluid py-5 feature">
    <?php foreach ($profil as $title) : ?>
        <h1 class="section-title mb-4 text-center"><?= $title->title_website; ?></h1>
    <?php endforeach; ?>
</div>

<!-- Features End -->

<!-- About Start -->
<div class="container-fluid mb-5">
    <?php foreach ($profil as $descper) : ?>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 d-flex justify-content-center">
                <img class="img-fluid custom-img" srcset="asset-user/images/<?= $descper->foto_utama; ?> 1024w,
                             asset-user/images/<?= $descper->foto_utama; ?> 768w,
                             asset-user/images/<?= $descper->foto_utama; ?> 576w,
                             asset-user/images/<?= $descper->foto_utama; ?> 320w" sizes="(max-width: 576px) 100vw, (max-width: 768px) 50vw, (max-width: 1024px) 33.3vw, 300px" alt="Image">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="mb-4 p-1 bg-primary text-white rounded text-center"><?php echo lang('Blog.titleAboutUs') ?></h4>
                <h1 class="text-primary mb-3"><?= $descper->nama_perusahaan; ?></h1>
                <p style="font-size: 1.2rem;">
                    <?php if (lang('Blog.Languange') == 'en') {
                        echo character_limiter($descper->deskripsi_perusahaan_en, 700);
                    } ?>
                    <?php if (lang('Blog.Languange') == 'in') {
                        echo character_limiter($descper->deskripsi_perusahaan_in, 700);
                    } ?>
                </p>
                <div class="button">
                    <a href="about" class="btn btn-m px-4 btn-primary rounded-btn"><?php echo lang('Blog.btnReadmore'); ?></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- About End -->

<!-- Blog Start -->
<div class="container">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="mb-4 p-1 bg-primary text-white rounded text-center"><?php echo lang('Blog.btnOurproducts') ?></h4>
    </div>
    <div class="row pb-3">
        <?php
        $limitedProducts = array_slice($tbproduk, 0, 3); // Memotong array $tbproduk menjadi 3 elemen pertama
        foreach ($limitedProducts as $produk) :
        ?>
            <div class="col-lg-4 mb-4">
                <a href="<?= base_url('product/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>" class="card mb-2 p-3 product-card text-decoration-none">
                    <img data-src="asset-user/images/<?= $produk->foto_produk; ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                            echo $produk->nama_produk_en;
                                                                                        } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $produk->nama_produk_in;
                                    } ?>" class="img-fluid lazyload product-image">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $produk->nama_produk_en;
                            } ?>
                            <?php if (lang('Blog.Languange') == 'in') {
                                echo $produk->nama_produk_in;
                            } ?>
                        </h6>
                        <div class="fa fa-hamburger d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="d-flex justify-content-center">
        <a href="<?= base_url('product') ?>" class="btn btn-lg px-4 btn-primary rounded-btn"><?php echo lang('Blog.btnOurproducts'); ?></a>
    </div>
</div>



<!-- Blog End -->

<style>
    .custom-img {
        max-width: 80%;
    }

    .feature h1 {
        font-size: 2rem;
    }

    .card-title {
        font-size: 1.1rem;
    }

    .rounded {
        border-radius: 15px !important;
    }

    .no-rounded {
        border-radius: 0 !important;
    }

    .rounded-btn {
        border-radius: 50px !important;
    }

    .product-card {
        display: block;
        color: inherit;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        text-decoration: none;
    }

    .product-image {
        transition: transform 0.3s ease;
    }

    /* .product-card:hover .product-image {
    transform: scale(1.05);
} */

    .card-title {
        font-size: 1.5rem;
        /* Increase font size */
        margin-left: 1rem;
        /* Adjust left margin */
        transition: color 0.3s ease;
    }

    .product-card:hover .card-title {
        color: #f0ad4e;
        /* Change to your desired hover color */
    }
</style>

<?= $this->endSection('content') ?>