<?php
$controller = $this->router->fetch_class();
$level = $this->session->userdata('ap_level');
?>

<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
			
				<li>
					<a href="<?php echo site_url('pendaftaran/dashboard');?>">
						<i class="icon-home"></i>
						<span>Dashboard</span>
					</a>	    				
				</li>
				
				
				
				<li>
					<a href="#">
						<i class="icon-list-alt"></i>
						<span>Reports</span>
					</a>    				
				</li>
				
				<li>					
					<a href="#">
						<i class="icon-facetime-video"></i>
						<span>App Tour</span>
					</a>  									
				</li>
                
                
                <li>					
					<a href="#">
						<i class="icon-bar-chart"></i>
						<span>Charts</span>
					</a>  									
				</li>
                
                
                <li>					
					<a href="#">
						<i class="icon-code"></i>
						<span>Pendaftaran</span>
					</a>  									
				</li>
				
				<li>					
					<a href="#">
						<i class="icon-long-arrow-down"></i>
						<span>Drops</span>
					</a>	
	
				</li>
			
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->