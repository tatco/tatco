	<p class="menu-title">MENU <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
    <ul>	
          <li class="start active "> 
	      <?php echo anchor('dashboard/', '<i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="badge badge-important pull-right">5</span>'); ?> 
	  </li>
	  <li class="">
	      <?php echo anchor('avisos/', '<i class="fa fa-envelope"></i> <span class="title">Comunicação</span>  <span class=" badge badge-disable pull-right ">15</span>'); ?> 
	  </li>      
	  <li class=""> 
              <?php echo anchor('usuarios/', '<i class="fa fa-user"></i> <span class="title">Cadastro de Usuários</span>'); ?>
          </li>
          <li class=""> <a href="javascript:;"> <i class="fa fa-edit"></i> <span class="title">Cadastro Geral</span> <span class="arrow open"></span> </a>
                <ul class="sub-menu">
                        <li > <?php echo anchor('veiculos/','Frota'); ?> </li>
                        <li > <?php echo anchor('pessoas/','Pessoal'); ?> </li>
              </ul>
          </li>
	  <li class=""> <a href="avaliacao.html"> <i class="fa fa-check-square-o"></i> <span class="title">Autoavaliação</span></a></li>
          <li class=""> <a href="input.html"> <i class="fa fa-info-circle"></i> <span class="title">Input de Informações</span> </a></li>
          <li class=""> <a href="remuneracao.html"> <i class="fa fa-random"></i> <span class="title">Remuneração Variável</span> </a></li>
          <li class=""> <a href="javascript:;"> <i class="icon-custom-map"></i> <span class="title">Indicadores</span> <span class="arrow open"></span> </a>
                <ul class="sub-menu" >
                  <li > <a href="rhssma.html"> RH & SSMA </a> </li>
                  <li > <a href="produtividade.html"> Produtividade </a> </li>
                  <li > <a href="financeiros.html"> Financeiros </a> </li>
                </ul>
          </li>
          <li class=""> <a href="gvista.html"> <i class="icon-custom-thumb"></i> <span class="title">Gestão à Vista</span> </a> </li>    
	  <li class=""> <a href="categorias.html"> <i class="fa fa-tasks"></i> <span class="title">Categorias GIF</span></a></li>
    </ul>

	<a href="#" class="scrollup">Scroll</a>
	<div class="clearfix"></div>