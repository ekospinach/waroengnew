<?php
$this->breadcrumbs=array(
	'Room Fotos',
);

$this->menu=array(
	array('label'=>'Add Room Foto', 'icon'=>'th-list','url'=>array('create', $this->varGet=>$_GET[$this->varGet])),
);
?>

<h1>Room Fotos</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbThumbnails', array(
    'dataProvider'=>$dataProvider,
    //'template'=>"{items}\n{pager}",
    'itemView'=>'_view',
)); ?>
<script type="text/javascript">
$(document).on('click','a.deleteTombol',function() {
	if(!confirm('Are you sure you want to delete this item?')) return false;
	var th=this;
	var afterDelete=function(){};
	$.ajax({
		type:'POST',
		url:$(this).attr('href'),
		success:function(data) {
			document.location.reload(true)
		},
		error:function(XHR) {
			document.location.reload(true)
		}
	});
	return false;
});
</script>