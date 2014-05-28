
      <div class="pull-right"> 
		<div class="chat-toggler">	
				<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Comunicação">
					<div class="user-details"> 
						<div class="username">
							<span class="badge badge-important">3</span> 
							<?php echo $nome; ?> <span class="bold"><?php echo $sobrenome; ?></span>									
						</div>						
					</div> 
					<div class="iconset top-down-arrow"></div>
				</a>	
				<div id="notification-list" style="display:none">
					<div style="width:300px">
						  <div class="notification-messages info">
									<div class="user-profile">
										<img src="<?php echo $localurl.'assets/img/profiles/d.jpg' ?>"  alt="" data-src="<?php echo $localurl.'assets/img/profiles/d.jpg' ?>" data-src-retina="<?php echo $localurl.'assets/img/profiles/d2x.jpg' ?>" width="35" height="35">
									</div>
									<div class="message-wrapper">
										<div class="heading">
											Marcelo Freiser - Recado para você
										</div>
										<div class="description">
											Reunião agendada para dia 12/03
										</div>
										<div class="date pull-left">
										Um minuto atrás
										</div>										
									</div>
									<div class="clearfix"></div>									
								</div>	
							<div class="notification-messages danger">
								<div class="iconholder">
									<i class="icon-warning-sign"></i>
								</div>
								<div class="message-wrapper">
									<div class="heading">
										Vale Cargas
									</div>
									<div class="description">
										O Tempo de Rota está crítico
									</div>
									<div class="date pull-left">
									2 minutos atrás
									</div>
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="notification-messages success">
								<div class="user-profile">
									<img src="<?php echo $localurl.'assets/img/profiles/h.jpg' ?>"  alt="" data-src="<?php echo $localurl.'assets/img/profiles/h.jpg' ?>" data-src-retina="<?php echo $localurl.'assets/img/profiles/h2x.jpg' ?>" width="35" height="35">
								</div>
								<div class="message-wrapper">
									<div class="heading">
										Simone - Comercial
									</div>
									<div class="description">
										3 novas transportadoras foram agregadas
									</div>
									<div class="date pull-left">
									Uma hora atrás
									</div>									
								</div>
								<div class="clearfix"></div>
							</div>							
						</div>				
				</div>
      			
			</div>
		 <ul class="nav quick-section ">
			<li class="quicklinks"> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">						
					<div class="iconset top-settings-dark "></div> 	
				</a>
				<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li><a href="user-profile.html"> Meus Dados</a>
                  </li>
                  <li><a href="calender.html">Minha Agenda</a>
                  </li>
                  <li><a href="meusavisos.html"> Meus Avisos&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a>
                  </li>
                  <li class="divider"></li>                
                  <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
               </ul>
			</li> 

		</ul>
      </div>