<?php
/* @var $this ArticulosController */
/* @var $dataProvider CActiveDataProvider */
print_r( Yii::app()->user->name);




if (Yii::app()->user->isGuest): 
$this->widget('zii.widgets.CMenu',array(
    'items'=>array(
  array(
        'label'=>'this menu item visible only for Guests (not logged in)', 
        'url'=>array('/site/index')),
      ),
    ));
endif;
  
  
$this->breadcrumbs=array(
	'Articulos',
);

$this->menu=array(
	array('label'=>'Alta Articulos', 'url'=>array('create')),
	array('label'=>'Modificar Articulos', 'url'=>array('admin')),
);
?>

<h1>Catalogo de Articulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
