<?php

use yii\helpers\Html;

$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="backend-default-index">
    <h1>Admin Panel</h1>
    <p>
       <a class="btn btn-default waves-effect waves-light" href="/backend/categories" title="" rel="nofollow">Редактировать категории</a>
    </p>
    <p> 
        <a class="btn btn-danger waves-effect waves-light" href="/backend/products" title="" rel="nofollow">Редактировать продукты</a>
    </p>
        
</div>
