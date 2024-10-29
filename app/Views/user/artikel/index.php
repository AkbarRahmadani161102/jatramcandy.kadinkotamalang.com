<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white text-shadow">
                <?php echo lang('Blog.titleArticles');
                // if (!empty($perusahaan)) {
                //     echo ' ' . $perusahaan->nama_perusahaan;
                // } ?>
            </h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase text-shadow"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3 test-shadow"></i>
            <span class="text-shadow"><?php echo lang('Blog.headerActivities');  ?></span>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- News With Sidebar Start -->
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="mb-4 p-1 bg-primary text-white rounded text-center"><?php echo lang('Blog.newsArticles');?></h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php foreach ($artikelterbaru as $row) : ?>
                <div class="col-lg-4 mb-4">
                    <a href="<?= base_url('/artikel/detail/' . $row->id_artikel) ?>" class="text-decoration-none">
                        <div class="position-relative d-flex flex-column h-100 mb-3 product-card rounded">
                            <img class="img-fluid w-100 product-image rounded-top" style="object-fit: cover;" src="<?= base_url('asset-user') ?>/images/<?= $row->foto_artikel; ?>" loading="lazy">
                            <div class="bg-white border border-top-0 p-4 flex-grow-1 rounded-bottom">
                                <div class="mb-2">
                                    <a class="text-uppercase mb-3 text-body"><?= date('d F Y', strtotime($row->created_at)); ?></a>
                                </div>
                                <h4 class="card-title h4 display-5"><?= substr(strip_tags($row->judul_artikel), 0, 20) ?>...</h4>
                                <p><?= substr(strip_tags($row->deskripsi_artikel), 0, 65) ?>...</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

<!-- Custom Styles -->
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
