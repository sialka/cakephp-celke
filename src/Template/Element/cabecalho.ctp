<nav class = "navbar navbar-expand navbar-dark bg-primary">
    <a class = "sidebar-toggle text-light mr-3">
        <span class = "navbar-toggler-icon"></span>
    </a>
    <a class = "navbar-brand" href = "#">
        <?= $this->Html->image('app.png', ['class' => 'rounded-circle', 'width' => '32', 'height' => '32']); ?>
    </a>

    <div class = "collapse navbar-collapse">
        <ul class = "navbar-nav ml-auto">
            <li class = "nav-item dropdown">
                <a class = "nav-link dropdown-toggle menu-header" href = "#" id = "navbarDropdownMenuLink" data-toggle = "dropdown">
                <!--<img class = "rounded-circle" src = "imagem/icon.png" width = "20" height = "20">;
                    -->
                    <?php
                    if (!empty($perfilUser->imagem)) {
                        echo $this->Html->image('../files/user/' . $perfilUser->id . '/' . $perfilUser->imagem, ['class' => 'rounded-circle', 'width' => '20', 'height' => '20']);
                    }
                    else {
                        echo $this->Html->image('../files/user/default.png', ['class' => 'rounded-circle', 'width' => '20', 'height' => '20']);
                    }
                    ?>

                    &nbsp;<span class="d-none d-sm-inline"><?= current(str_word_count($perfilUser->name, 2)) ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">                    
                    <?= $this->Html->link('<i class="fas fa-user"></i> Perfil', ['controller' => 'users', 'action' => 'perfil'], ['class' => 'dropdown-item text-primary', 'escape' => false]) ?>                    
                    <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Sair', ['controller' => 'users', 'action' => 'logout'], ['class' => 'dropdown-item text-danger', 'escape' => false]) ?>                    
                </div>
            </li>
        </ul>                
    </div>
</nav> 