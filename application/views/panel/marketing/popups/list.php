<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/_common_head'); ?>
	<title>Document</title>
</head>

<body>
	<header>
		<?php $this->load->view('components/_common_nav'); ?>
	</header>
	<main>
		<div class="mb-3">
			<div class="page-header d-print-none">
				<div class="container-xl">
					<div class="row g-2 align-items-center">
						<div class="col">
							<!-- Page pre-title -->
							<div class="page-pretitle">
								Overview
							</div>
							<h2 class="page-title">
								All Popups
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<article>
			<div class="container">
				<div class="row m-0 flex-row-reverse">
					<div class="col-lg-4 col-md-6 col-12">
						<div class="row m-0 g-0 align-items-center">
							<div class="col-md col-12">
								<h5>Total Popups</h5>
							</div>
							<div class="col-auto mb-3">
								<div class="card">
									<div class="card-body">
										<h2><?= count($active_popups) ?></h2>
									</div>
								</div>
							</div>
							<div class="col-12">
								<?= form_open_multipart("api/popup/new") ?>
								<div class="card mb-3">
									<div class="card-header">
										<strong>Popup Details</strong>
									</div>
									<div class="card-body">
										<div class="mb-3">
											<label for="" class="form-label">Popup Title</label>
											<input type="text" name="popup_title" class="form-control">
											<small class="form-text">Any name for popup for just representation purpose.</small>
										</div>
										<div class="mb-3">
											<label for="" class="form-label">Popup URL</label>
											<input type="url" value="<?= APP_URL ?>" name="popup_url" class="form-control">
											<small class="form-text">Any name for popup for just representation purpose.</small>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Upload Image</label>
											<input id="choose" class="form-control" name="files" type="file" size="20" />
											<small class="form-text">*Only .jpeg Images are accepted. <br> *(Size of the popup should be 1920px X 1080px)</small>
										</div>
									</div>
								</div>
								<div class="card mb-3">
									<div class="card-header">
										<strong>Popup Metadata</strong>
									</div>
									<div class="card-body">
										<div class="mb-3">
											<label for="" class="form-label">Popup Target URL</label>
											<input type="text" name="popup_target_url" placeholder="Default is /" class="form-control">
											<small class="form-text">Any name for popup for just representation purpose.</small>
										</div>
										<div class="mb-3">
											<label for="" class="form-label">Popup Visibility</label>
											<div class="input-group mb-2">
												<label for="" class="input-group-text">From</label>
												<input type="datetime-local" placeholder="" value="<?= dateinput_format("+1 hour") ?>" name="visible_from" class="form-control">
											</div>
											<div class="input-group">
												<label for="" class="input-group-text">To</label>
												<input type="datetime-local" placeholder="" value="<?= dateinput_format("+1 day +1 hour") ?>" name="visible_to" class="form-control">
											</div>
											<small class="form-text">Any name for popup for just representation purpose.</small>
										</div>
									</div>

								</div>
							</div>
							<button type="submit" class="btn btn-icon btn-primary">
								<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
								<i class="ti ti-plus"></i>
								<span class="d-none d-md-inline">Add New Popup</span>
							</button>
							<?= form_close() ?>
						</div>
					</div>
					<div class="col-lg-8 col-md-6 col-12">
						<!-- List Popups -->
						<section>
							<div class="row m-0">
								<?php for ($i = 0; $i < count($active_popups); $i++) : ?>
									<div class="col-lg-4 col-md-6 col-12 mb-3">
										<div class="card" data-bs-toggle="modal" data-bs-target="#modal-new_image<?= $i ?>">
											<div class="wrap popup_thumb">
												<img class="w-100" src="<?= APP_URL . $active_popups[$i]['file_url'] ?>" alt="<?= $active_popups[$i]['title'] ?>">
											</div>
										</div>
									</div>
								<?php endfor ?>
							</div>
							<?php for ($i = 0; $i < count($active_popups); $i++) : ?>
								<div class="modal fade" id="modal-new_image<?= $i ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="staticBackdropLabel">Edit Popup <?= $active_popups[$i]['title'] ?></h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="row m-0">
													<div class="col-xl-7 col-md-6 col-12">
														<div class="card">
															<div class="wrap popup_thumb">
																<img class="w-100" src="<?= APP_URL . $active_popups[$i]['file_url'] ?>" alt="<?= $active_popups[$i]['title'] ?>">
															</div>
														</div>
													</div>
													<div class="col-xl-5 col-md-6 col-12">
														<div class="card mb-3">
															<div class="card-body">
																<?= form_open("api/popup/delete", null, array('id' => $active_popups[$i]['id'])) ?>
																<button type="submit" class="btn btn-icon btn-primary">
																	<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
																	<i class="ti ti-trash"></i>
																	<span class="d-none d-md-inline">Delete Popup</span>
																</button>
																<?= form_close() ?>

															</div>
														</div>
														<div class="card">
															<div class="card-body">
																<?= form_open_multipart("api/popup/update", null, array('id' => $active_popups[$i]['id'])) ?>
																<div class="mb-3">
																	<label for="" class="form-label">Popup Title</label>
																	<input type="text" name="popup_title" value="<?= $active_popups[$i]['title'] ?>" class="form-control">
																	<small class="form-text">Any name for popup for just representation purpose.</small>
																</div>
																<div class="mb-3">
																	<label class="form-label" for="">Replace Image</label>
																	<input id="choose" class="form-control" name="files" value="<?= $active_popups[$i]['file_url'] ?>" type="file" size="20" />
																	<small class="form-text">*Only .jpeg Images are accepted. <br> *(Size of the popup should be 1920px X 1080px)</small>
																</div>
																<button type="submit" class="btn btn-icon btn-primary">
																	<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
																	<i class="ti ti-edit"></i>
																	<span class="d-none d-md-inline">Edit Popup</span>
																</button>
																<?= form_close() ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endfor ?>
						</section>
					</div>
				</div>
			</div>
		</article>
	</main>
	<footer class="footer footer-transparent d-print-none py-4">
		<?php $this->load->view('components/_common_footer'); ?>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script> -->
</body>

</html>
