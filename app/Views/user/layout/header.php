<!-- Topbar Start -->
<div class="container-fluid py-3 px-lg-5">
    <div class="row">
        <?php foreach ($profil as $header) :  ?>
            <div class="col-lg-4 mb-lg-0 d-flex justify-content-center justify-content-lg-start" style="align-items: center;">
                <a href="<?= base_url('user/home') ?>" class="d-flex align-items-center">
                    <img src="<?= base_url('asset-user/images/'); ?><?= $header->logo_perusahaan ?>" alt="<?= $header->nama_perusahaan ?>" class="img-fluid" style="max-height: 60px; width: auto;">
                </a>
            </div>
        <?php endforeach;  ?>
    </div>
</div>
<!-- Topbar End -->
