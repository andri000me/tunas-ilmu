<?php
$controller = $this->router->fetch_class();
?>

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
					
					
					<li <?php if($controller == 'signup') { echo "class=''"; } ?>>
						<a href="<?php echo site_url('Secure'); ?>">
						Ke halaman login
					</a></li>

					<li <?php if($controller == 'secure') { echo "class=''"; } ?>>
						<a href='<?php echo site_url('Signup'); ?>'>
						Ke halaman signup
					</a></li>

					<li>
					<?php 
						if ($controller == 'signup') {
							echo "string";
						}
					?>
					</li>

					<?php 
						if ($controller == 'secure') {
							echo "string";
						}
					?>
					
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