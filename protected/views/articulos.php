<?php
/* @var $this ArticulosController */
/* @var $model Articulos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulos-articulos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion1'); ?>
		<?php echo $form->textField($model,'descripcion1'); ?>
		<?php echo $form->error($model,'descripcion1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion2'); ?>
		<?php echo $form->textField($model,'descripcion2'); ?>
		<?php echo $form->error($model,'descripcion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cbarra'); ?>
		<?php echo $form->textField($model,'cbarra'); ?>
		<?php echo $form->error($model,'cbarra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grupo'); ?>
		<?php echo $form->textField($model,'grupo'); ?>
		<?php echo $form->error($model,'grupo'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->