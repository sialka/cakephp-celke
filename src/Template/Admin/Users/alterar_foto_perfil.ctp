<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">
            <i class="fa fa-user text-primary"></i>
            Editar Foto
        </h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">            
            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'btn btn-outline-primary btn-sm']); ?>            
        </span>
        <div class="dropdown d-block d-md-none">        
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">                
                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'dropdown-item']) ?>                
            </div>
        </div>       
    </div>
</div><hr>
<?= $this->Flash->render() ?>  
<?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>

<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Foto (150x150) </label>        
        <?= $this->Form->file('imagem', ['class' => 'form-control', 'label' => false, 'onchange' => 'previewImagem()']); ?>        
    </div>
    <div class="form-group col-md-6 text-center">
        <?php             
            if($user->imagem == null){
                $imagem_antiga = '..//..//files/user/default.png';
            }else{
                $imagem_antiga = '..//..//files/user/'.$user->id.'//'.$user->imagem;
            }                        
            echo $this->Html->image($imagem_antiga, ['class' => 'img-thumbnail', 'width' => '150', 'height' => '150', 'id' => 'preview-img']);            
        ?>        
    </div>
</div>

<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>

<?= $this->Form->button('<i class="fa fa-save"></i> Salvar', ['class' => 'btn btn-warning', 'escape' => false]) ?>
<?= $this->Form->end() ?>