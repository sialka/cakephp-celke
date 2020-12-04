<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">
            <i class="fa fa-user text-primary"></i>
            Perfil
        </h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">            
            <?= $this->Html->link(__('Editar'), ['methods' => 'Users', 'action' => 'editPerfil'], ['class' => 'btn btn-outline-warning btn-sm']) ?>                                  
            <?= $this->Html->link(__('Senha'), ['methods' => 'Users', 'action' => 'editSenhaPerfil'], ['class' => 'btn btn-outline-danger btn-sm']) ?>                                  
        </span>
        <div class="dropdown d-block d-md-none">        
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(__('Listar'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                <?= $this->Html->link(__('Senha'), ['controller' => 'Users', 'action' => 'editSenhaPerfil'], ['class' => 'dropdown-item']) ?>                
            </div>
        </div>
    </div>
</div><hr>
<?= $this->Flash->render() ?>  
<dl class="row">
    <dt class="col-sm-3">Foto</dt>
    <dd class="col-sm-9 border-bottom w-25 p-1">
        <figure class="figure">
            <?php            
            if (!empty($perfilUser['imagem'])) {
                echo $this->Html->image('../files/user/' . $perfilUser['id'] . '/' . $perfilUser['imagem'], ['class' => 'rounded', 'width' => '100', 'height' => '100']);
            }
            else {
                echo $this->Html->image('../files/user/default.png', ['class' => 'rounded-circle', 'width' => '100', 'height' => '100']);
            }
            ?>    
        </figure>        
        <?= $this->Html->link('<i class="fas fa-pencil-alt"></i>', ['controller' => 'Users', 'action' => 'alterarFotoPerfil'], ['class' => 'btn btn-link', 'escape' => false]) ?>
    </dd>
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9 border-bottom w-25 p-1"><?= $this->Number->format($user['id']) ?></dd>

    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9 border-bottom w-25 p-1"><?= h($user['name']) ?>
    </dd>

    <dt class="col-sm-3">E-mail</dt>
    <dd class="col-sm-9 border-bottom w-25 p-1"><?= h($user['email']) ?></dd>

    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9 border-bottom text-primary w-25 p-1 font-weight-bold"><?= h($user['username']) ?></dd>    

</dl>

