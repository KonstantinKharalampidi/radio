<?php
/* @var $this RubricsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rubrics',
);

$this->menu=array(
	array('label'=>'Create Rubrics', 'url'=>array('create')),
	array('label'=>'Manage Rubrics', 'url'=>array('admin')),
);
?>

<h1>Rubrics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
