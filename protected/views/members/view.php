<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->email,
);

$this->menu=array(
	array('label'=>'List Members', 'url'=>array('index')),
	// array('label'=>'Create Members', 'url'=>array('create')),
	array('label'=>'Update Members', 'url'=>array('update', 'id'=>$model->email)),
	// array('label'=>'Delete Members', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->email),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Members', 'url'=>array('admin')),
);
?>

<h1>View Members #<?php echo $model->email; ?></h1>

<div class="row">
<div class="col-md-6">
<img style="width:30%; display: block; margin-left: auto;margin-right:auto" src="images/<?php echo $model->foto_diri; ?>" alt="">
</div>
<div class="col-md-4">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nama',
		'password',
		'no_hp',
		'tgl_lahir',
		'email',
		'jenis_kelamin',
		'no_ktp',
	),
)); ?>
</div>
</div>





