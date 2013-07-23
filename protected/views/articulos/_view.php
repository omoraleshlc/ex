<?php
/* @var $this ArticulosController */
/* @var $data Articulos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyI), array('view', 'id'=>$data->keyI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion1')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion2')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cbarra')); ?>:</b>
	<?php echo CHtml::encode($data->cbarra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo')); ?>:</b>
	<?php echo CHtml::encode($data->grupo); ?>
	<br />


</div>