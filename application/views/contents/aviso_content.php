

      <ul class="breadcrumb">
        <li>
          <p>VOCÊ ESTÁ AQUI</p>
        </li>
        <li><a href="#" class="active">Comunicação</a> </li>
      </ul>
      <div class="page-title"> <i class="fa fa-envelope"></i>
        <h3>AVISOS & NOTIFICAÇÕES - <span class="semi-bold">Comunicação</span></h3>
      </div>

<?php //echo validation_errors(); ?>

<?php //echo form_open('avisos/enviar/'.$id) ?>     

                <div class="row">
                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label class="form-label">Título</label>
                                <div class="controls">
                                    <input name="msg_titulo" type="text" class="form-control" />
                                </div>
                          </div>
                </div>

<div class="row">
			<div class="col-md-9">
				<ul class="wysihtml5-toolbar" style=""><li class="dropdown"><a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-white"><i class="fa fa-font"></i>&nbsp;<span class="current-font">Normal text</span>&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a data-wysihtml5-command-value="div" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Normal text</a></li><li><a data-wysihtml5-command-value="h1" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 1</a></li><li><a data-wysihtml5-command-value="h2" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 2</a></li><li><a data-wysihtml5-command-value="h3" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 3</a></li><li><a data-wysihtml5-command-value="h4" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 4</a></li><li><a data-wysihtml5-command-value="h5" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 5</a></li><li><a data-wysihtml5-command-value="h6" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 6</a></li></ul></li><li class="dropdown"><a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-white"><span class="current-color">Black</span>&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><div data-wysihtml5-command-value="black" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="black" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Black</a></li><li><div data-wysihtml5-command-value="silver" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="silver" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Silver</a></li><li><div data-wysihtml5-command-value="gray" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="gray" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Grey</a></li><li><div data-wysihtml5-command-value="maroon" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="maroon" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Maroon</a></li><li><div data-wysihtml5-command-value="red" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="red" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Red</a></li><li><div data-wysihtml5-command-value="purple" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="purple" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Purple</a></li><li><div data-wysihtml5-command-value="green" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="green" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Green</a></li><li><div data-wysihtml5-command-value="olive" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="olive" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Olive</a></li><li><div data-wysihtml5-command-value="navy" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="navy" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Navy</a></li><li><div data-wysihtml5-command-value="blue" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="blue" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Blue</a></li><li><div data-wysihtml5-command-value="orange" class="wysihtml5-colors"></div><a data-wysihtml5-command-value="orange" data-wysihtml5-command="foreColor" class="wysihtml5-colors-title" href="javascript:;" unselectable="on">Orange</a></li></ul></li><li><div class="btn-group "><a title="CTRL+B" data-wysihtml5-command="bold" class="btn btn-white" href="javascript:;" unselectable="on">Bold</a><a title="CTRL+I" data-wysihtml5-command="italic" class="btn btn-white" href="javascript:;" unselectable="on">Italic</a><a title="CTRL+U" data-wysihtml5-command="underline" class="btn btn-white" href="javascript:;" unselectable="on">Underline</a></div></li><li><div class="btn-group"><a title="Unordered list" data-wysihtml5-command="insertUnorderedList" class="btn btn-white" href="javascript:;" unselectable="on"><i class="fa fa-list"></i></a><a title="Ordered list" data-wysihtml5-command="insertOrderedList" class="btn btn-white" href="javascript:;" unselectable="on"><i class="fa fa-th-list"></i></a><a title="Outdent" data-wysihtml5-command="Outdent" class="btn btn-white" href="javascript:;" unselectable="on"><i class="fa fa-align-right"></i></a><a title="Indent" data-wysihtml5-command="Indent" class="btn btn-white" href="javascript:;" unselectable="on"><i class="fa fa-align-left"></i></a></div></li><li><div class="bootstrap-wysihtml5-insert-link-modal modal hide fade"><div class="modal-header"><a data-dismiss="modal" class="close"></a><h3>Insert link</h3></div><div class="modal-body"><input type="text" class="bootstrap-wysihtml5-insert-link-url m-wrap large" value="http://"></div><div class="modal-footer"><a data-dismiss="modal" class="btn" href="#">Cancel</a><a data-dismiss="modal" class="btn green  btn-primary" href="#">Insert link</a></div></div><a title="Insert link" data-wysihtml5-command="createLink" class="btn btn-white" href="javascript:;" unselectable="on"><i class="fa fa-share"></i></a></li><li><div class="bootstrap-wysihtml5-insert-image-modal modal hide fade"><div class="modal-header"><a data-dismiss="modal" class="close"></a><h3>Insert image</h3></div><div class="modal-body"><input type="text" class="bootstrap-wysihtml5-insert-image-url m-wrap large" value="http://"></div><div class="modal-footer"><a data-dismiss="modal" class="btn" href="#">Cancel</a><a data-dismiss="modal" class="btn  green btn-primary" href="#">Insert image</a></div></div><a title="Insert image" data-wysihtml5-command="insertImage" class="btn btn-white" href="javascript:;" unselectable="on"><i class="fa fa-picture-o"></i></a></li></ul><textarea rows="20" class="form-control" id="text-editor" style="display: none;" placeholder="Digite o texto desejado"></textarea><input type="hidden" name="_wysihtml5_mode" value="1"><iframe width="0" height="0" frameborder="0" class="wysihtml5-sandbox" security="restricted" allowtransparency="true" marginwidth="0" marginheight="0" style="background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(229, 233, 236); border-style: solid; border-width: 1px; clear: none; display: block; float: none; margin: 0px; outline: 0px none rgb(0, 0, 0); outline-offset: 0px; padding: 10px 11px 6px 12px; position: static; z-index: auto; vertical-align: middle; text-align: start; -moz-box-sizing: border-box; box-shadow: none; border-radius: 4px; width: 713.25px; height: 389.333px; top: auto; left: auto; right: auto; bottom: auto;"></iframe>
			</div>
			
			<div class="col-md-3">

			  <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>+ <span class="semi-bold">Arquivos</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid">
                    <form action="/file-upload" class="dropzone no-margin dz-clickable">
                      
                    <div class="dz-message"><span>Arraste os arquivos que deseja anexar à mensagem dentro deste quado.</span></div></form>
                  </div>
                </div>
              </div>
				
			</div>
			
		</div>

<div class="row">

			
			<div class="col-md-6">
				<button type="button" class="btn btn-primary btn-cons">Enviar</button>		
			</div>
		</div>

<!--/form -->   <!-- form_open() -->
