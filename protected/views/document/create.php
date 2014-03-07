<?php
/* @var $this DocumentController */
/* @var $model Document */

$this->breadcrumbs=array(
	'Documents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Document', 'url'=>array('index')),
	array('label'=>'Manage Document', 'url'=>array('admin')),
);
?>


<h1>Create Document</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


    <div class="product">
        <div class="imgdiv">

            <img id="blah1" class="i2" src="#" width="120px" height="20px"/>

        </div>
    </div>

