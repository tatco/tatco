      <ul class="breadcrumb">
        <li>
          VOCÊ ESTÁ AQUI&nbsp;&nbsp;
        </li>
		<li>
			&nbsp;&nbsp; Cadastro Geral &nbsp;&nbsp;
        </li>
        <li><a href="#" class="active">Pessoal</a> </li>
      </ul>
      <div class="page-title"> <i class="fa fa-male"></i>
        <h3>CADASTRO GERAL - <span class="semi-bold">Pessoal</span></h3>
      </div>
	  
		<!-- INICIAR O CONTEÚDO DA PÁGINA --> 
<?php echo form_open('email/send'); ?>
                _
	<div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Cadastro de <span class="semi-bold">Pessoal</span></h4>
                  <div class="tools"> <a class="collapse" href="javascript:;"></a>  </div>
                </div>
                <div class="grid-body no-border"> <br>
                  <div class="row">
				  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">CPF</label>
                        <div class="controls">
                            <?php
                            $data = array(
                                        'name'        => 'a[cpf]',
                                        'id'          => 'cpf',
                                        'class'       => 'form-control',
                                      );

                          echo form_input($data);
                          
                          $ajax = ajax();
                          //$ajax->keyup('cpf', $ajax->call('ajax.php?pessoas/buscarPessoa/|cpf|','span_container'));
                          
                          $ajax->Exec('cpf',$ajax->call('ajax.php?pessoas/buscarPessoa/Hello'));
                          
                                          ?>
                          <span id='span_container' style='color:green'></span>

                            
                            
                        </div>
                      </div>
					  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Nome</label>
                        <div class="controls">
                             <?php
                            $data = array(
                                        'name'        => 'nome',
                                        'id'          => 'nome',
                                        'class'       => 'form-control',
                                      );

                             echo form_input($data);
                              ?>
                         
                        </div>
                      </div>
					  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Nomes do Meio</label>
                        <div class="controls">
                           <?php
                            $data = array(
                                        'name'        => 'nome_meio',
                                        'id'          => 'nome_meio',
                                        'class'       => 'form-control',
                                      );

                             echo form_input($data);
                              ?>  
                          
                        </div>
                      </div>
					  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Sobrenome</label>
                        <div class="controls">
                           <?php
                            $data = array(
                                        'name'        => 'sobrenome',
                                        'id'          => 'sobrenome',
                                        'class'       => 'form-control',
                                      );

                             echo form_input($data);
                              ?>
                          
                        </div>
                      </div>
					  

				</div>
		

				<div class="row">
					  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Data Admissão</label>
                        <div class="controls">
							<div class="input-append success date">
								   <input class="span12" type="text">
								   <span class="add-on"><span class="arrow"></span><i class="icon-th"></i></span> 
							</div>
                        </div>
                      </div>
					  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Tempo de Empresa</label>
                        <div class="controls">
                          <input type="text" class="form-control">
                        </div>
                      </div>
					  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Tempo Médio</label>
                        <div class="controls">
                          <input type="text" class="form-control">
                        </div>
                      </div>
					  

                </div>
				
              </div>
            </div>
          </div>
	</div>
		

	<div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Carteira de Habilitação - <span class="semi-bold">CNH</span></h4>
                  <div class="tools"> <a class="collapse" href="javascript:;"></a>  </div>
                </div>
                <div class="grid-body no-border"> <br>
                  <div class="row">
				  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Número CNH</label>
                        <div class="controls">
                          <input type="text" class="form-control">
                        </div>
                      </div>
					  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Categoria</label>
                        <div class="controls">

							<select multiple="" class="form-control select2 select2-offscreen" id="categoriascnh" tabindex="-1">
									<option value="100">A</option>
									<option value="101">B</option>
									<option value="200">C</option>
									<option value="201">D</option>
									<option value="202">E</option>
							</select>

                        </div>
                      </div>
					  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Data Validade</label>
                        <div class="controls">

							<div class="input-append success date">
							   <input type="text" class="span12">
							   <span class="add-on"><span class="arrow"></span><i class="icon-th"></i></span> 
							</div>

                        </div>
                      </div>
					  
                      <div class="form-group col-md-3 col-sm-3 col-xs-3">
                        <label class="form-label">Data Emissão</label>
                        <div class="controls">
							<div class="input-append success date">
								   <input class="span12" type="text">
								   <span class="add-on"><span class="arrow"></span><i class="icon-th"></i></span> 
							</div>
                        </div>
                      </div>
					  

                </div>
			
				
              </div>
            </div>
          </div>
    </div>
		
		<button class="btn btn-primary btn-cons" type="button">Salvar</button>		
		
		<!-- FINALIZAR O CONTEÚDO DA PÁGINA --> 
	  