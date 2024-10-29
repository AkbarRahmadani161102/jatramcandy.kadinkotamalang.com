<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white text-shadow">
                <?php echo lang('Blog.titleActivities');
                // if (!empty($perusahaan)) {
                //     echo ' ' . $perusahaan->nama_perusahaan;
                // } 
                ?>
            </h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase text-shadow"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span class="text-shadow"><?php echo lang('Blog.headerActivities');  ?></span>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Blog Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h3 class="mb-4 p-1 bg-primary text-white rounded text-center"><?php echo lang('Blog.newsActivities'); ?></h3>
    </div>
    <div class="row pb-3 justify-content-center">
        <?php foreach ($tbaktivitas as $aktivitas) : ?>
            <div class="col-lg-4 mb-4 d-flex justify-content-center">
                <a href="<?= base_url('activities/detail/' . $aktivitas->id_aktivitas . '/' . url_title($aktivitas->nama_aktivitas_en) . '_' . url_title($aktivitas->nama_aktivitas_in)) ?>" class="card mb-2 p-3 product-card text-decoration-none">
                    <img data-src="asset-user/images/<?= $aktivitas->foto_aktivitas ?>" alt="Gambar Produk" class="img-fluid lazyload product-image rounded-top">
                    <div class="card-body bg-secondary d-flex align-items-center p-0 rounded-bottom">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $aktivitas->nama_aktivitas_en;
                            } ?>
                            <?php if (lang('Blog.Languange') == 'in') {
                                echo $aktivitas->nama_aktivitas_in;
                            } ?>
                        </h6>
                        <div class="fa fa-utensils d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Blog End -->

<!-- Custom Styles -->
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
        cursor: pointer;
        border-radius: 15px !important;
        overflow: hidden;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        text-decoration: none;
    }

    .product-image {
        transition: transform 0.3s ease;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .card-title {
        font-size: 1.5rem;
        margin-left: 1rem;
        transition: color 0.3s ease;
    }

    .product-card:hover .card-title {
        color: #f0ad4e;
    }

    .rounded-bottom {
        border-bottom-left-radius: 15px !important;
        border-bottom-right-radius: 15px !important;
    }

    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
        /* Add text shadow */
    }
</style>

<?= $this->endSection('content'); ?>