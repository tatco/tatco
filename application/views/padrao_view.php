<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>TATCO - Decisão com Segurança</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="TATCO - Decisão com Segurança" />
<meta content="" name="MLN Consultoria & Ubiq42 Projetos" />

<!-- FAVICON -->
<link rel="icon" type="image/gif" href="<?php echo $localurl.'assets/img/icon/favicon.gif' ?>" />
	  
<!-- BEGIN PLUGIN CSS -->
<link href="<?php echo $localurl.'assets/plugins/pace/pace-theme-flash.css' ?>" rel="stylesheet" type="text/css" media="screen"/>
<!--link href="<?php echo $localurl.'assets/plugins/fullcalendar/fullcalendar.css' ?>" rel="stylesheet" type="text/css" media="screen"/-->
<link href="<?php echo $localurl.'assets/plugins/zabuto-calendar/css/zabuto_calendar.css' ?>" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $localurl.'assets/plugins/jquery-slider/css/jquery.sidr.light.css' ?>" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $localurl.'assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css' ?>" rel="stylesheet" type="text/css" media="screen"/>

<link href="<?php echo $localurl.'assets/plugins/bootstrap-tag/bootstrap-tagsinput.css' ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo $localurl.'assets/plugins/dropzone/css/dropzone.css' ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo $localurl.'assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css' ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo $localurl.'assets/plugins/bootstrap-datepicker/css/datepicker.css' ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $localurl.'assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css' ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $localurl.'assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css' ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $localurl.'assets/plugins/ios-switch/ios7-switch.css' ?>" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo $localurl.'assets/plugins/bootstrap-select2/select2.css' ?>" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $localurl.'assets/plugins/jquery-slider/css/jquery.sidr.light.css' ?>" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $localurl.'assets/plugins/boostrap-slider/css/slider.css' ?>" rel="stylesheet" type="text/css"/>
<!-- END PLUGIN CSS -->

<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo $localurl.'assets/plugins/boostrapv3/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css"/>
<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $localurl.'assets/plugins/boostrapv3/css/bootstrap-theme.min.css' ?>" rel="stylesheet" type="text/css"/>--
<link href="<?php echo $localurl.'assets/plugins/font-awesome/css/font-awesome.css' ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo $localurl.'assets/css/animate.min.css' ?>" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="<?php echo $localurl.'assets/css/style.css' ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo $localurl.'assets/css/responsive.css' ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo $localurl.'assets/css/custom-icon-set.css' ?>" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

<!-- BEGIN CSS TATCO -->
<link href="<?php echo $localurl.'assets/css/tatco.css' ?>" rel="stylesheet" type="text/css"/>
<!-- END CSS TATCO -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse "> 
	  <!-- INCLUDES - BEGIN TOP NAVIGATION BAR : inside LOGO, TOP NAVIGATION MENU, CHAT TOGGLER -->
	  <?php $this->load->view('includes/topnavbar_include'); ?>
	  <!-- INCLUDES - END TOP NAVIGATION BAR --> 
	</div>
	<!-- END HEADER --> 
	<!-- BEGIN CONTAINER -->
	<div class="page-container row"> 
	  <!-- BEGIN SIDEBAR -->
	  <div class="page-sidebar" id="main-menu"> 
	  <!-- INCLUDES - BEGIN MINI-PROFILE -->
		<?php $this->load->view('includes/miniprofile_include'); ?>
	  <!-- INCLUDES - END MINI-PROFILE -->
	   
	   <!-- INCLUDES - BEGIN SIDEBAR MENU -->	
		<?php $this->load->view('includes/sidebar_include'); ?>
	   <!-- INCLUDES - END SIDEBAR MENU --> 
	  </div>
	  <div class="footer-widget">		

		<div class="pull-right">

		<a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
	  </div>
	  <!-- END SIDEBAR --> 
	  <!-- BEGIN PAGE CONTAINER-->
	  <div class="page-content">
		<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<div id="portlet-config" class="modal hide">
		  <div class="modal-header">
			<button data-dismiss="modal" class="close" type="button"></button>
			<h3>Configurar Dispositivo</h3>
		  </div>
		  <div class="modal-body"> Coloque aqui o formulário de Configuração do Dispositivo </div>
		</div>
		<div class="clearfix"></div>
		<div class="content">
		  
			<!-- CONTENTS - INICIAR O CONTEÚDO DA PÁGINA --> 
			<?php $this->load->view('contents/'.$content_page); ?>
			<!-- CONTENTS - FINALIZAR O CONTEÚDO DA PÁGINA --> 
		  
		  <!-- END PAGE -->
		</div>
	  </div>
	</div>

	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<!-- END FOOTER -->
        
	<!-- BEGIN CORE JS FRAMEWORK-->
	<!--script src="<?php echo $localurl.'assets/plugins/jquery-1.8.3.min.js' ?>" type="text/javascript"></script-->
        <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script-->
        <script src="<?php echo $localurl.'assets/js/jquery-2.1.0.min.js' ?>" type="text/javascript"></script>
        <script src="<?php echo $localurl.'assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/bootstrap/js/bootstrap.min.js' ?>" type="text/javascript"></script>
        <!--script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" type="text/javascript"></script-->
        <script src="<?php echo $localurl.'assets/plugins/breakpoints.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/jquery-unveil/jquery.unveil.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/jquery-block-ui/jqueryblockui.js' ?>" type="text/javascript"></script>
	<!-- END CORE JS FRAMEWORK -->

	<!-- BEGIN PAGE LEVEL JS -->
	<script src="<?php echo $localurl.'assets/plugins/pace/pace.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/jquery-slider/jquery.sidr.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js' ?>" type="text/javascript"></script> 
        <script src="<?php echo $localurl.'assets/plugins/jquery-ui-touch/jquery.ui.touch-punch.min.js' ?>" type="text/javascript"></script>
        <!--script src="<?php echo $localurl.'assets/plugins/fullcalendar/fullcalendar.min.js' ?>"></script-->
        <script src="<?php echo $localurl.'assets/plugins/zabuto-calendar/js/zabuto_calendar.min.js' ?>" type="text/javascript"></script>
        
        <script src="<?php echo $localurl.'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/jquery-inputmask/jquery.inputmask.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/jquery-autonumeric/autoNumeric.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/ios-switch/ios7-switch.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/bootstrap-select2/select2.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/plugins/dropzone/dropzone.min.js' ?>" type="text/javascript"></script>
	<!-- END PAGE LEVEL JS -->
        
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo $localurl.'assets/js/form_elements.js' ?>" type="text/javascript"></script>
        <script defer="defer" id="cjax_lib" type="text/javascript" src="<?php echo $localurl.'/cjax/core/js/cjax-5.8.min.js' ?>"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        
        <!-- BEGIN CORE TEMPLATE JS -->
	<script src="<?php echo $localurl.'assets/js/core.js' ?>" type="text/javascript"></script>
	<script src="<?php echo $localurl.'assets/js/chat.js' ?>" type="text/javascript"></script> 
	<script src="<?php echo $localurl.'assets/js/demo.js' ?>" type="text/javascript"></script>
        <!-- END CORE TEMPLATE JS -->
	
</body>
</html>