<h2>Bem Vindo <?php echo $user['name']; ?> </h2>
<?= $this->Html->link(__('Sair'), ['controller' => 'users', 'action' => 'logout']) ?>