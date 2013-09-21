<?php
$this->breadcrumbs=array(
	'Karirs'=>array('index', $this->varGet=>$_GET[$this->varGet]),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Karir', 'icon'=>'th-list','url'=>array('index', $this->varGet=>$_GET[$this->varGet])),
	array('label'=>'Create Karir', 'icon'=>'plus-sign','url'=>array('create', $this->varGet=>$_GET[$this->varGet])),
	array('label'=>'Update Karir', 'icon'=>'pencil','url'=>array('update','id'=>$model->id, $this->varGet=>$_GET[$this->varGet])),
	array('label'=>'Delete Karir', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id, $this->varGet=>$_GET[$this->varGet]),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Karir #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'posisi',
		'date_open',
		'date_close',
		'date_input',
		'date_modif',
		'active',
		'sort',
	),
)); ?>
