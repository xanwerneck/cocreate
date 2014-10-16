<div class="row-fluid home">

        <?php foreach ($ideias as $ideia) { ?>
          <div class="col-3 thumb-idea" >
            <img class="img-circle img100" src="<?=$this->config->item('assets');?>imgs/ideia.png" alt="Ideia">
            <h3><?=$ideia->nome;?></h3>
            <p><?=$ideia->conteudo;?></p>
            <p>
              <a class="btn btn-default" href="#" role="button">Ver detalhes »</a>
              <a class="btn btn-primary" href="<?=$this->config->item('base_url');?>index.php/inicio/relatorio/<?=$ideia->id_ideia;?>" role="button">Ver desempenho »</a>
            </p>
          </div>

        <?php } ?>
      
  
</div>

<div class="modal fade" id="apresentaIdeia" tabindex="-1" role="dialog" aria-labelledby="apresentaIdeiaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
        <h4 class="modal-title">Apresentar ideia</h4>
      </div>
      <div class="modal-body">
        <form >
          <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título da ideia">
          <br />
          <textarea class="form-control" id="conteudo" name="conteudo" rows="3" placeholder="Descreva a sua ideia"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button id="btnSalvar" type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    
   $("#btnSalvar").click(function(){
      var url = '<?=$this->config->item("base_url");?>';
      $.post( url + "index.php/inicio/publicar" ,
                     {
                             titulo: $("#titulo").val(),
                             conteudo: $("#conteudo").val()
                     },
                     function(data){
                        window.location.href = url ;
                     } 
             );
    });
</script>