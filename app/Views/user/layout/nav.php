<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">FoodFuds</span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav m-auto py-4">
                <a id="home-link" href="<?= base_url('/') ?>" class="nav-item nav-link <?php if (current_url() == base_url('/') || current_url() == base_url()) echo 'active'; ?>"><?php echo lang('Blog.headerHome'); ?></a>
                <a href="<?= base_url('about') ?>" class="nav-link text-left <?php if (current_url() == base_url('about')) echo 'active'; ?>"><?php echo lang('Blog.headerAbout'); ?></a>
                <a href="<?= base_url('artikel') ?>" class="nav-link text-left <?php if (current_url() == base_url('artikel')) echo 'active'; ?>"><?php echo lang('Blog.headerArticle'); ?></a>
                <a href="<?= base_url('product') ?>" class="nav-link text-left <?php if (current_url() == base_url('product')) echo 'active'; ?>"><?php echo lang('Blog.headerProducts'); ?></a>
                <a href="<?= base_url('activities') ?>" class="nav-link text-left <?php if (current_url() == base_url('activities')) echo 'active'; ?>"><?php echo lang('Blog.headerActivities'); ?></a>
                <a href="<?= base_url('contact') ?>" class="nav-link text-left <?php if (current_url() == base_url('contact')) echo 'active'; ?>"><?php echo lang('Blog.headerContact'); ?></a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo lang('Blog.headerLanguage'); ?></a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="<?= site_url('lang/in') ?>" class="dropdown-item">Indonesia</a>
                        <a href="<?= site_url('lang/en') ?>" class="dropdown-item">English</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
