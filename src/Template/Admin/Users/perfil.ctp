<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Perfil</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Listar'), ['methods' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>            
            <?= $this->Html->link(__('Editar'), ['methods' => 'users', 'action' => 'edit', $user['id']], ['class' => 'btn btn-outline-warning btn-sm']) ?>                                  
        </span>
        <div class="dropdown d-block d-md-none">        
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(__('Listar'), ['controller' => 'users', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'edit', $user['id']], ['class' => 'dropdown-item']) ?>                
            </div>
        </div>
    </div>
</div><hr>
<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($user['id']) ?></dd>

    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= h($user['name']) ?>
    </dd>

    <dt class="col-sm-3">E-mail</dt>
    <dd class="col-sm-9"><?= h($user['email']) ?></dd>

    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9 text-primary"><?= h($user['username']) ?></dd>    
    
</dl>

