<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <?php foreach ($profil as $perusahaan) : ?>
    <link rel="shortcut icon" href="<?= base_url('asset-user/images/') ?><?= $perusahaan->favicon_website ?>">
   <!-- Meta tags for SEO -->
   <meta name="title" content="<?= $meta->meta_title ?? 'Buku Berkilau' ?>">
    <meta name="description" content="<?= $meta->meta_description ?? 'Default description for Buku Berkilau' ?>">
    <meta name="keywords" content="<?= $meta->meta_keywords ?? 'books, ecommerce, online store' ?>">

    <!-- Canonical Tag -->
    <link rel="canonical" href="<?= $meta->canonical_url ?? base_url() ?>">

    <!-- Page Title -->
    <title><?= $meta->meta_title ?? 'INDONESIAN-EXPORTER' ?></title>
  <?php endforeach; ?>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free Website Template" name="keywords">

  <!-- Favicon -->
  <link href="<?= base_url('asset-user') ?>/img/favicon.ico" rel="icon">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/fonts/icomoon/style.css">
  <!-- Other head elements -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Flaticon Font -->
  <link href="<?= base_url('asset-user') ?>/lib/flaticon/font/flaticon.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url('asset-user') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- library template -->
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/aos.css">
  <link href="<?= base_url('asset-user') ?>/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url('asset-user') ?>/css/style.css" rel="stylesheet">

</head>

<body>

  <?= $this->include('user/layout/header');  ?>
  <?= $this->include('user/layout/nav');  ?>

  <!-- render halaman konten -->
  <?= $this->renderSection('content'); ?>

  <!-- icon wa -->
  <?php foreach ($profil as $iconwa) : ?>
    <a class="whats-app" href="<?= $iconwa->link_whatsapp ?>" target="_blank" style="position: fixed; bottom: 30px; right: 10px; z-index: 1000;">
      <img data-src="<?= base_url('asset-user/images/iconwa.png'); ?>" alt="WhatsApp" class="my-float lazyload" style="width: 80px; height: auto; padding: 10px; transition: background-color 0.3s ease-in-out;">
    </a>
  <?php endforeach; ?>

  <!-- footer -->
  <?= $this->include('user/layout/footer');  ?>



  <!-- JavaScript Libraries -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/easing/easing.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery-ui.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/popper.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/bootstrap.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/owl.carousel.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.countdown.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/bootstrap-datepicker.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/aos.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.fancybox.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.sticky.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/lazysizes.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="<?= base_url('asset-user') ?>/mail/jqBootstrapValidation.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="<?= base_url('asset-user') ?>/js/main.js"></script>



</body>

</html>