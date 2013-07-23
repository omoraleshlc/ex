<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articuloses'=>array('index'),
	$model->keyI=>array('view','id'=>$model->keyI),
	'Update',
);

$this->menu=array(
	array('label'=>'List Articulos', 'url'=>array('index')),
	array('label'=>'Create Articulos', 'url'=>array('create')),
	array('label'=>'View Articulos', 'url'=>array('view', 'id'=>$model->keyI)),
	array('label'=>'Manage Articulos', 'url'=>array('admin')),
);
?>

<h1>Update Articulos <?php echo $model->keyI; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>