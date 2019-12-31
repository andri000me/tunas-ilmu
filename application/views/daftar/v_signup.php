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
						<a href="<?php echo base_url().'Secure' ?>" class="">
							Ke halaman Login
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

<div class="account-container register">

	<div class="content clearfix">

		<form id="regForm" method="post">

			<h1>Registrasi Akun</h1>
			
			<div class="login-fields">

				<p>Masukan Nama,Tanggal Lahir,Email</p>

				<div class="field">
					<label for="Nama">Nama:</label>
					<input type="text" id="nama" name="nama" value="" placeholder="Nama Lengkap" class="login" autofocus="autofocus" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="Tanggal Lahir">Tanggal Lahir:</label>	
					<input type="date" id="tgllahir" name="tgllahir" value="" placeholder="Last Name" class="login" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="email">Email Address:</label>
					<input type="text" id="email" name="email" value="" placeholder="Email" class="login"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->

			<div class="login-actions">
				
				<button class="button btn btn-primary btn-large" type="submit">Registrasi</button>
			
			</div> <!-- .actions -->

		</form>
						
	</div> <!-- /content -->

	<div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
		<button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
		<span id="message"></span>
	</div>

</div> <!-- /account-container -->

<script type="text/javascript">
	$(document).ready(function(){
		getTable();

		$('#regForm').submit(function(e){
			e.preventDefault();
			var url = '<?php echo base_url(); ?>';
			var reg = $('#regForm').serialize();
			$.ajax({
				type: 'POST',
				data: reg,
				dataType: 'json',
				url: url + 'index.php/signup/signup',
				success:function(response){
					$('#message').html(response.message);
					if(response.error){
						$('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
					}
					else{
						$('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
						$('#regForm')[0].reset();
						getTable();
					}
				}
			});
		});

		$(document).on('click', '#clearMsg', function(){
			$('#responseDiv').hide();
		});

	});
	
</script>