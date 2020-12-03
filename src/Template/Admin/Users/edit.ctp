<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Usuário</h2>
    </div>

    <div class="p-2">
        <?= $this->Html->link(__('Listar'), ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
        <?= $this->Html->link(__('Visualizar'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary btn-sm']); ?>
        <?= $this->Form->postLink(__('Apagar'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar o usuário {0}?', $user->name)]); ?>
    </div>
</div><hr>
<?= $this->Flash->render() ?>  
<?= $this->Form->create($user) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome</label>
        <?php echo $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]); ?>        
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> E-mail</label>        
        <?php echo $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Seu melhor e-mail', 'label' => false]); ?>        
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label><span class="text-danger">*</span> Usuário</label>        
        <?php echo $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Digite o nome de usuário', 'label' => false]); ?>        
    </div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>

<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Form->end() ?>


