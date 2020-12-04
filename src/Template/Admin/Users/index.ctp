<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">
            <i class="fa fa-list text-primary"></i>
            Lista de Usuários
        </h2>
    </div>

    <div class="p-2">
        <?= $this->Html->link('<i class="fa fa-plus"></i> Novo Usuário', ['controller' => 'users', 'action' => 'add'], ['class' => 'btn btn-outline-success btn-sm', 'escape' => false]); ?>
    </div>

</div>
<?= $this->Flash->render() ?>  
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th class="d-none d-sm-table-cell">E-mail</th>
                <th class="d-none d-lg-table-cell">Data do Cadastro</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td class="d-none d-sm-table-cell"><?= h($user->email) ?></td>
                    <td class="d-none d-lg-table-cell"><?= h($user->created) ?></td>
                    <td class="text-center">
                        <span class="d-none d-md-block">        
                            <?= $this->Html->link('<i class="fas fa-search"></i>', ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'btn btn-link btn-sm text-primary', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="fas fa-edit"></i>', ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'btn btn-link btn-sm text-warning', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="fas fa-key"></i>', ['controller' => 'users', 'action' => 'editSenha', $user->id], ['class' => 'btn btn-link btn-sm text-info', 'escape' => false]) ?>
                            <?= $this->Form->postLink('<i class="fas fa-trash"></i>', ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-link btn-sm text-danger', 'escape' => false, 'confirm' => __('Realmente deseja excluir o usuario # {0}?', $user->name)]) ?>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'dropdown-item']) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'dropdown-item']) ?>
                                <?= $this->Html->link(__('Senha'), ['controller' => 'users', 'action' => 'editSenha', $user->id], ['class' => 'dropdown-item']) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'dropdown-item', 'confirm' => __('Realmente deseja excluir o usuario # {0}?', $user->name)]) ?>
                            </div>
                        </div>

                    </td>
                </tr>            
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $this->element('pagination'); ?>

</div>

