<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>


<!-- Page Header Start -->
<div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white">
                <?php echo lang('Blog.titleActivities');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?>
            </h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span><?php echo lang('Blog.headerActivities');  ?></span>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container-fluid mt-3 mb-5">
    <?php foreach ($profil as $descper) : ?>
        <div class="row align-items-center">
            <div class="col-lg-6 px-0">
                <img width="100%" class="img-fluid ml-4 lazyload" data-src="/asset-user/images/<?= $tbaktivitas->foto_aktivitas ?>" alt="
                <?php if (lang('Blog.Languange') == 'en') {
                    echo $tbaktivitas->nama_aktivitas_en;
                } ?>
                <?php if (lang('Blog.Languange') == 'in') {
                    echo $tbaktivitas->nama_aktivitas_in;
                } ?>">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <!-- <h5 class="mb-4"><?php echo lang('Blog.titleAboutUs')  ?></h5> -->
                <h1 class="text-primary mb-3">
                    <?php if (lang('Blog.Languange') == 'en') {
                        echo $tbaktivitas->nama_aktivitas_en;
                    } elseif (lang('Blog.Languange') == 'in') {
                        echo $tbaktivitas->nama_aktivitas_in;
                    } ?>
                </h1>
                <p>
                    <?php if (lang('Blog.Languange') == 'en') {
                        echo $tbaktivitas->deskripsi_aktivitas_en;
                    } elseif (lang('Blog.Languange') == 'in') {
                        echo $tbaktivitas->deskripsi_aktivitas_in;
                    } ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- About End -->
<?= $this->endSection('content'); ?>