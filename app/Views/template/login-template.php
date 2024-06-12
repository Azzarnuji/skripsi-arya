<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/vuexy/assets/" data-template="vertical-menu-template">

<head>
    <?= $this->include('template/includes/meta') ?>

    <?= $this->renderSection('styles') ?>
    <?= $this->include('template/includes/style') ?>
</head>     

<body>
    <!-- Content -->
    <?= $this->renderSection('content') ?>
    <!-- / Content -->

    <?= $this->renderSection('scripts') ?>
    <?= $this->include('template/includes/script') ?>
</body>

</html>
