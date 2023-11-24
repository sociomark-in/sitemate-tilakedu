<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css"> -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
	<title>Document</title>
</head>

<body>
	<header>
		<?php $this->load->view('components/_common_nav'); ?>
	</header>
	<main>
		<div class="page-header d-print-none">
			<div class="container-xl">
				<div class="row g-2 align-items-center">
					<div class="col">
						<!-- Page pre-title -->
						<div class="page-pretitle">
							Overview
						</div>
						<h2 class="page-title">
							Dashboard
						</h2>
					</div>
					<!-- Page title actions -->
					<div class="col-auto ms-auto d-print-none">
						<div class="btn-list">
							<span class="d-none d-sm-inline">
								<a href="#" class="btn">
									New view
								</a>
							</span>
							<a href="#" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report">
								<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
								<i class="ti ti-plus"></i>
								<span class="d-none d-md-inline">Create new report</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer footer-transparent d-print-none py-4">
		<?php $this->load->view('components/_common_footer'); ?>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script> -->
</body>

</html>
