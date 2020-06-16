<?php

use yii\bootstrap\Carousel;

/* @var $this yii\web\View */

$this->title = 'Hoja de Ejercicios 5 de Yii2';
?>
<div class="site-index">
  <?php echo Carousel::widget(['items' => $images]); ?>
</div>
