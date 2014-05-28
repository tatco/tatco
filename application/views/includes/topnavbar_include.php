 <div class="navbar-inner">
	<div class="header-seperation"> 
		<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
			<li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
		</ul>
		<!-- BEGIN LOGO -->
                <a href="<?php echo base_url('dashboard'); ?>"><img src="<?php echo $localurl.'assets/img/logo.png' ?>" class="logo" style="margin:17px auto auto 15px;" alt=""  data-src="<?php echo $localurl.'assets/img/logo.png' ?>" data-src-retina="<?php echo $localurl.'assets/img/logo.png' ?>" /></a>
                <!-- END LOGO --> 
		<ul class="nav pull-right notifcation-center">
			<li class="dropdown" id="header_task_bar"> <a href="<?php echo base_url('dashboard'); ?>" class="dropdown-toggle active" data-toggle=""> <div class="iconset top-home"></div> </a> </li>
			<li class="dropdown" id="header_inbox_bar" > <a href="meusavisos.html" class="dropdown-toggle" > <div class="iconset top-messages"></div>  <span class="badge" id="msgs-badge">2</span> </a></li>
                        <li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div> </a> </li>
		</ul>
      </div>
      <!-- END RESPONSIVE MENU TOGGLER --> 
      <div class="header-quick-nav" > 
		  <!-- INCLUDES - BEGIN TOP NAVIGATION MENU -->
		  <?php $this->load->view('includes/topnavmenu_include'); ?>
		  <!-- INCLUDES - END TOP NAVIGATION MENU -->
		  <!-- INCLUDES - BEGIN CHAT TOGGLER -->
		  <?php $this->load->view('includes/chattoggler_include'); ?>
		  <!-- INCLUDES - END CHAT TOGGLER -->
      </div> 
  </div>