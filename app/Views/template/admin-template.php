<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" id="html" data-api-url="<?= base_url(); ?>" data-assets-path="<?= $assetsPath; ?>" data-template="vertical-menu-template">

<head>
	<?= $this->include('template/includes/meta') ?>

	<?= $this->include('template/includes/style') ?>

	<?= $this->include('template/includes/style_script') ?>
</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->

			<?= $this->include('template/includes/sidebar') ?>

			<!-- / Menu -->

			<!-- Layout container -->
			<div class="layout-page-" style="padding-left:16.25rem;width:100%;">
				<!-- Navbar -->


				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">

					<!-- Content -->
					<?= $this->renderSection('content') ?>
					<!-- / Content -->

					<?= $this->include('template/includes/footer') ?>

					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>

		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>

		<!-- Drag Target Area To SlideIn Menu On Small Screens -->
		<div class="drag-target"></div>
	</div>
	<!-- / Layout wrapper -->

	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->

	<?= $this->include('template/includes/script') ?>

</body>

</html>