<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white text-shadow">
                <?php echo lang('Blog.titleOurproducts');
                // if (!empty($perusahaan)) {
                //     echo ' ' . $perusahaan->nama_perusahaan;
                // } ?>
            </h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase text-shadow"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span class="text-shadow"><?php echo lang('Blog.headerProducts');  ?></span>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Blog Start -->
<div class="container">
    <div class="d-flex flex-column text-center mb-5">
        <h3 class="mb-4 p-1 bg-primary text-white rounded text-center"><?php echo lang('Blog.btnOurproducts') ?></h3>
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
    <!-- <div class="d-flex justify-content-center">
        <a href="<?= base_url('product') ?>" class="btn btn-lg px-4 btn-primary rounded-btn"><?php echo lang('Blog.btnOurproducts'); ?></a>
    </div> -->
</div>
<!-- Blog End -->

<style>
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

    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
        /* Add text shadow */
    }
</style>

<?= $this->endSection('content'); ?>