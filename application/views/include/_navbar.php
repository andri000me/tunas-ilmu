<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				<img alt="<?php echo config_item('web_title'); ?>" src="<?php echo config_item('img'); ?>logo-tunas-ilmu-putih2.png">				
			</a>		
			
		  <div class="nav-collapse">
			<ul class="nav pull-right">
				  <li class="dropdown">						
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						  <i class="icon-user"></i> 
						  <?php echo $this->session->userdata('ap_nama'); ?>
						  <b class="caret"></b>
					  </a>
						
					  <ul class="dropdown-menu">
						  <li><a href="javascript:;">Ubah Password</a></li>
						  <li><a href="<?php echo site_url('secure/logout'); ?>">Logout</a></li>
					  </ul>						
				  </li>
			  </ul>
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->