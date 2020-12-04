
<nav class="sidebar">
    <ul class="list-unstyled">
        <li>
            <?= $this->Html->link('<i class="fas fa-tachometer-alt"></i> Dashboard', ['controller' => 'welcome', 'action' => 'index'], ['class'=>'text-warning', 'escape' => false]); ?>
        </li>
        <li>
            <a href="#submenu1" data-toggle="collapse">
                <i class="fas fa-user text-info"></i> Usuário
            </a>
            <ul id="submenu1" class="list-unstyled collapse">                
                <?= $this->Html->link('<i class="fas fa-users"></i> Usuários', ['controller' => 'users', 'action' => 'index'], ['class'=>'text-primary', 'escape' => false]); ?>                
            </ul>
        </li>
        <li>
            <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Sair', ['controller' => 'users', 'action' => 'logout'], ['class'=>'text-danger', 'escape' => false]); ?>                
        </li>
    </ul>
</nav>

