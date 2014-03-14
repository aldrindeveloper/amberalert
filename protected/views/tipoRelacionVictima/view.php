<?php
$this->breadcrumbs=array(
	'Tipo Relacion Victimas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Listar','url'=>array('index')),
array('label'=>'Nuevo','url'=>array('create')),
array('label'=>'Actualizar','url'=>array('update','id'=>$model->id)),
array('label'=>'Eliminar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Administrar','url'=>array('admin')),
);
?>

<h1>Ver Tipo de Relación de la Victima #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'nombre_corto',
		'codigo',
		'descripcion',
),
)); ?>
