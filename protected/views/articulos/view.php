<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articuloses'=>array('index'),
	$model->keyI,
);

$this->menu=array(
	array('label'=>'List Articulos', 'url'=>array('index')),
	array('label'=>'Create Articulos', 'url'=>array('create')),
	array('label'=>'Update Articulos', 'url'=>array('update', 'id'=>$model->keyI)),
	array('label'=>'Delete Articulos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyI),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Articulos', 'url'=>array('admin')),
);
?>

<h1>View Articulos #<?php echo $model->keyI; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyI',
		'descripcion1',
		'descripcion2',
		'cbarra',
		'grupo',
	),
)); ?>
