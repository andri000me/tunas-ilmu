<?php $this->load->view('include/_header'); ?>

<?php $this->load->view('include/_navbar'); ?>

<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
			
				<li class="active">
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
					<a href="<?php echo site_url('pendaftaran');?>">
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


    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">	      	
	      	
	      	<div class="span12">
	      		
	      		<div id="target-1" class="widget">
	      			
	      			<div class="widget-content">
	      				
			      		<h1>12 Columns</h1>
			      		 
		      		</div> <!-- /widget-content -->
		      		
	      		</div> <!-- /widget -->
	      		
      		</div> <!-- /span12 -->
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
    
	</div> <!-- /main-inner -->
	    
</div> <!-- /main -->

    
<?php $this->load->view('include/_footer'); ?>
