<?php
$controller = $this->router->fetch_class();
$level = $this->session->userdata('ap_level');
?>

<div class="subnavbar">

  <div class="subnavbar-inner">
  
    <div class="container">

      <ul class="mainnav">
      
        <?php if($level == 'admin') {?>
        <li <?php if($controller == 'pendaftaran') { echo "class='active'"; } ?>>
          <a href="<?php echo base_url().'Pendaftaran' ?>">
            <i class="icon-home"></i>
            <span>Dashboard</span>
          </a>              
        </li>
        <?php }?>

        <?php if($level == 'admin') {?>
        <li <?php if($controller == '') { echo "class='active'"; } ?>>
          <a href="<?php echo base_url().'Pendaftaran/data_santri' ?>">
            <i class="icon-list-alt"></i>
            <span>Data Santri</span>
          </a>            
        </li>
        <?php }?>

        <!--hanya bisa diakses oleh santri-->
        <li>          
          <a href="<?php echo base_url().'' ?>">
            <i class="icon-edit"></i>
            <span>Pendaftaran</span>
          </a>                    
        </li>
                
                
        <li>          
          <a href="<?php echo base_url().'Welcome' ?>">
            <i class="icon-bar-chart"></i>
            <span>Input Nilai</span>
          </a>                    
        </li>
                
        
        <li class="dropdown">         
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-book"></i>
            <span>Laporan</span>
            <b class="caret"></b>
          </a>  
        
          <ul class="dropdown-menu">
                        <li><a href="#">Santri Diterima</a></li>
                        <li><a href="#">Santri Ditolak</a></li>
                    </ul>           
        </li>


        <li class="dropdown">         
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-group"></i>
            <span>Data User</span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Admin</a></li>
            <li><a href="#">Santri</a></li>
          </ul>                    
        </li>
        
        
      
      </ul>

    </div> <!-- /container -->
  
  </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->