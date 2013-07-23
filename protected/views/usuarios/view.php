<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->folio,
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->folio)),
	array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->folio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1>View Usuarios #<?php echo $model->folio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'folio',
		'usuario',
		'passwd',
		'nombre',
		'aPaterno',
		'aMaterno',
		'llave',
		'ejercicio',
		'fecha',
		'medico',
		'tipoUsuario',
		'status',
		'fechaIngreso',
		'fechaSalida',
		'horaIngreso',
		'horaSalida',
		'entidad',
		'email',
		'language',
		'ip',
		'role',
	),
)); ?>
