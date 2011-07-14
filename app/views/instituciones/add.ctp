<div class="instituciones form">
<?php echo $this->Form->create('Institucion');?>
	<fieldset>
		<legend><?php __('Add Institucion'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('institucion');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('fecha_egreso');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Instituciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>