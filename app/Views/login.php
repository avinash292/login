<?php $session = \Config\Services::session(); ?>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
			<div class="container">
				<h3>LogIn</h3>
				<hr>
				<?php if ($session->getTempdata('error')) { ?>

					<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
						<span class="badge badge-pill badge-danger">Unsuccess</span>
						<?php echo $session->getTempdata('error'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

				<?php } ?>

				<form class="form" action="<?php echo base_url('/users/checkLogin'); ?>" method="post" id="register_form">
					<div class="form-group"> <label for="email">Email:</label> <input name="email" type="email" value="" class="form-control" required /> <span class="val_email"></span> </div>

					<div class="form-group"><label for="password">Password:</label> <input name="password" type="password" class="form-control" required /> <span class="val_pass"></span></div>

					<div class="row">
						<div class="col-12 col-sm-4">
							<button type="submit" class="btn btn-primary">LogIn</button>

						</div>
						<div class="col-12 col-sm-8 text-right">
							<a href="users/signup" class="btn btn-danger">Registration</a>
						</div>
					</div>
				</form>
			</div>

		</div>

	</div>
</div>