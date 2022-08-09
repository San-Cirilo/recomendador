<?= $this->Html->css('login') ?>
<div class="login wrapper fadeInDown">
  <div id="formContent">
    <?= $this->Flash->render('Auth');?>
    <div class="fadeIn first">
      <h1>Login</h1>
    </div>
        <?= $this->Form->create();?>
            <?= $this->Form->control('username',['class'=>'form-control fadeIn second','name'=>'email']) ?>
            <?= $this->Form->control('password',['class'=>'form-control fadeIn third','name'=>'password']) ?>
            <?= $this->Form->button('Iniciar Sesion',['class'=>'fadeIn fourth']) ?>
        <?= $this->Form->end() ?>
    <!-- <div id="formFooter">
        <?= $this->Html->link('Crear cuenta',['controller'=>'Usuarios','action'=> 'add'],['class'=> 'underlineHover']) ?>  
    </div> -->
  </div>
</div>