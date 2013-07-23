<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Escribe tu usuario y password:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
<?php $this->pageTitle=Yii::app()->name . ' - Login'; ?>

<h1>Login</h1>

<div>
<?php echo CHtml::beginForm(); ?>

<?php //echo CHtml::errorSummary($form); ?>

<div class="row">
  <?php echo $form->labelEx($model,'usuario'); ?>
  <?php echo $form->textField($model,'usuario'); ?>
  <?php echo $form->error($model,'usuario'); ?>
</div>
    
    
    <div class="row">
  <?php echo $form->labelEx($model,'passwd'); ?>
  <?php echo $form->passwordField($model,'passwd'); ?>
  <?php echo $form->error($model,'passwd'); ?>
</div>

<div>
<?php echo CHtml::submitButton('Login'); ?>
</div>

    
    <div>    
<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->


<?php $this->endWidget(); ?>
</div><!-- form -->
