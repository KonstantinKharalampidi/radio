<?php
/* @var $this SchedulerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Schedulers',
);

$this->menu=array(
	array('label'=>'Create Scheduler', 'url'=>array('create')),
	array('label'=>'Manage Scheduler', 'url'=>array('admin')),
);
?>

<h1>Schedulers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
