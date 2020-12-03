
<nav class="sidebar">
    <ul class="list-unstyled">
        <li>
            <?= $this->Html->link('<i class="fas fa-tachometer-alt"></i> Dashboard', ['controller' => 'welcome', 'action' => 'index'], ['escape' => false]); ?>
        </li>
        <li>
            <a href="#submenu1" data-toggle="collapse">
                <i class="fas fa-user"></i> Usuário
            </a>
            <ul id="submenu1" class="list-unstyled collapse">                
                <?= $this->Html->link('<i class="fas fa-users"></i> Usuários', ['controller' => 'users', 'action' => 'index'], ['escape' => false]); ?>                
            </ul>
        </li>
        <li>
            <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Sair', ['controller' => 'users', 'action' => 'logout'], ['escape' => false]); ?>                
        </li>
    </ul>
</nav>

