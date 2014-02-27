
<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>'Menu'),
        array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
        array('label'=>'Manage Posts', 'icon'=>'book','active'=>false, 'url'=>array('post/admin')),
        array('label'=>'Create New Post', 'icon'=>'pencil', 'active'=>false, 'url'=>array('post/create')),
        array('label'=>'Approve Comments', 'icon'=>'flag', 'active'=>false, 'url'=>array('comment/index')),
        array('label'=>'Upload Image', 'icon'=>'flag', 'active'=>false, 'url'=>array('document/create')),
        array('label'=>'Logout', 'icon'=>'user', 'active'=>false, 'url'=>array('site/logout')),
    ),
)); ?>