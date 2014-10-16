<div class="top-ideia">
	<?php $ide= $ideia[0]; ?>
	<h2><?=$ide->nome;?></h2>
	<h4><?=$ide->conteudo;?></h4>
</div>
<div class="prog-bars">
	<h3>Inovação</h3>
	<progress value="<?=$ide->inovacao;?>" max="10"></progress> 	
	<h3>Potencial</h3>
	<progress value="<?=$ide->potencial;?>" max="10"></progress>
	<h3>Escalabilidade</h3>
	<progress value="<?=$ide->escalabilidade;?>" max="10"></progress> 		
</div>

<div class="anuncio">
	<div class="box-anuncio">
		<button type="button" id="btnConsultoria" class="btn btn-success btn-lg">
		  Solicitar consultoria
		</button>
		<button type="button" id="btnSocio" class="btn btn-danger btn-lg">
		  Encontrar sócios
		</button>
	</div>
</div>


<div class="modal fade" id="apresentaClick" tabindex="-1" role="dialog" aria-labelledby="apresentaIdeiaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
        <h4 class="modal-title">CoCreate - Estabelecendo conexões</h4>
      </div>
      <div class="modal-body">
        Muito obrigado pelo seu interesse, mas ainda estamos desenvolvendo este recurso. Em breve ele estará em pleno funcionamento. Muito obrigado, equipe CoCreate.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    
   $("#btnConsultoria").click(function(){
      var url = '<?=$this->config->item("base_url");?>';
      $.post( url + "index.php/inicio/regclick" ,
                     {
                             tipo : 1
                     },
                     function(data){
                      	$('#apresentaClick').modal('show') ; 
                     } 
             );
    });

   $("#btnSocio").click(function(){
      var url = '<?=$this->config->item("base_url");?>';
      $.post( url + "index.php/inicio/regclick" ,
                     {
                             tipo : 2
                     },
                     function(data){
                        $('#apresentaClick').modal('show') ; 	
                     } 
             );
    });
</script>
