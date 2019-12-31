<?php $this->load->view('include/header'); ?>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>	
			
			<a class="brand">
				<img src="<?php echo config_item('img') ?>logo-tunas-ilmu-putih2.png">	
			</a>

			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="<?php echo base_url().'Signup' ?>" class="">
							Ke halaman Registrasi
						</a>
						
					</li>
					
					<li class="">						
						<a href="<?php echo site_url(); ?>" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->

<div class="account-container">

	<div class="content clearfix">

		<h1>Login</h1>

		<?php echo form_open('secure', array('id' => 'FormLogin')); ?>
		<div class="login-fields">

			<div class="field">
				<label for="username">Username:</label>
				<?php
				echo form_input(array(
					'name' => 'username',
					'class' => 'login username-field',
					'placeholder' => 'Username',
					'autocomplete' => 'off',
					'autofocus' => 'autofocus'
				));
				?>
			</div> <!-- /field -->

			<div class="field">
				<label for="password">Password:</label>
				<?php
				echo form_password(array(
					'name' => 'password',
					'class' => 'login password-field',
					'placeholder' => 'Password',
					'id' => 'InputPassword'
				));
				?>

			</div> <!-- /password -->


		</div> <!-- /login-fields -->

		<div class="login-actions">

			<button type="submit" class="button btn btn-success btn-large">Sign In</button>

		</div> <!-- .actions -->
		<?php echo form_close(); ?>

		<br>

		<br>

		<div id='ResponseInput'></div>

	</div> <!-- /content -->

</div> <!-- /account-container -->

<script>
	$(function() {
		//------------------------Proses Login Ajax-------------------------//
		$('#FormLogin').submit(function(e) {
			e.preventDefault();
			$.ajax({
				url: $(this).attr('action'),
				type: "POST",
				cache: false,
				data: $(this).serialize(),
				dataType: 'json',
				success: function(json) {
					//response dari json_encode di controller

					if (json.status == 1) {
						window.location.href = json.url_home;
					}
					if (json.status == 0) {
						$('#ResponseInput').html(json.pesan);
					}
					if (json.status == 2) {
						$('#ResponseInput').html(json.pesan);
						$('#InputPassword').val('');
					}
				}
			});
		});
	});
</script>