<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Listar Usuários</h2>
    </div>

    <div class="p-2">
        <?= $this->Html->link(__('Cadastrar'), ['controller' => 'users', 'action' => 'add'], ['class' => 'btn btn-outline-success btn-sm']); ?>
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
                        <?= $this->Html->link(__('Consultar'), ['action' => 'view', $user->id], ['class' => 'btn btn-outline-info btn-sm']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Você tem certeza que deseja excluir? # {0}?', $user->id)]) ?>
                    </td>
                </tr>            
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $this->element('pagination'); ?>

</div>

