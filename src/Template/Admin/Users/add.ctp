<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Usuário</h2>
    </div>

    <div class="p-2">
        <?= $this->Html->link(__('Listar'), ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']); ?>
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
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Usuário</label>        
        <?php echo $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Digite o nome de usuário', 'label' => false]); ?>        
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Senha</label>        
        <?php echo $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Senha com mínimo 6 caracteres', 'label' => false]); ?>        
    </div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>

<?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-success']) ?>
<?= $this->Form->end() ?>
