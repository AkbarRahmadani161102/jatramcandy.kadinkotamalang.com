<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>


<!-- Page Header Start -->
<div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <h1 class="text-white text-shadow">
            <?php echo lang('Blog.titleAboutUs'); ?>
        </h1>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase text-shadow"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span class="text-shadow"><?php echo lang('Blog.headerAbout');  ?></span>
        </div>
    </div>
</div>
<!-- Page Header End -->
<br>
<br>
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
                <h3 class="mb-4 p-1 bg-primary text-white rounded text-center"><?php echo lang('Blog.titleAboutUs') ?></h3>
                <h1 class="text-primary mb-3"><?= $descper->nama_perusahaan; ?></h1>
                <p style="font-size: 1.2rem;">
                    <?php if (lang('Blog.Languange') == 'en') {
                        echo ($descper->deskripsi_perusahaan_en);
                    } ?>
                    <?php if (lang('Blog.Languange') == 'in') {
                        echo ($descper->deskripsi_perusahaan_in);
                    } ?>
                </p>
                <!-- <div class="button">
                    <a href="about" class="btn btn-m px-4 btn-primary rounded-btn"><?php echo lang('Blog.btnReadmore'); ?></a>
                </div> -->
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- About End -->

<style>
    .custom-img {
        max-width: 80%;
    }

    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
        /* Add text shadow */
    }
</style>
<?= $this->endSection('content'); ?>