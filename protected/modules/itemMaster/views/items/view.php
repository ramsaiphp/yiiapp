<?php
/* @var $this ItemsController */
/* @var $model Items */
Yii::app()->clientScript->registerCoreScript('jquery');
		Yii::app()->clientScript->registerCoreScript('jquery.ui');
		

$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->items_id,
);

$this->menu=array(
	array('label'=>'List Items', 'url'=>array('index')),
	array('label'=>'Create Items', 'url'=>array('create')),
	array('label'=>'Update Items', 'url'=>array('update', 'id'=>$model->items_id)),
	array('label'=>'Delete Items', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->items_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
);
?>

<h1>View Items #<?php echo $model->items_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'items_id',
		'item_name',
		'cost',
		'selling',
	),
)); ?>
