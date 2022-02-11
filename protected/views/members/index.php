<?php
/* @var $this MembersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Members',
);

$this->menu=array(
	array('label'=>'Manage Members', 'url'=>array('admin')),
	array('label'=>'View Members as Json', 'url'=>array('/userJson/index')),
	array('label'=>'View Users', 'url'=>array('/users/index')),
);
?>

<h1>Members</h1>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

