<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
      <h1>Feed de Notícias via Rest API</h1>

      <?php foreach($data as $row) :?>
      <p>ID: <?= $row['id']; ?> </p>
      <p>Título: <?= $row['title']; ?> </p>
      <p>Notícia: <?= $row['status']; ?> </p>
      <?php endforeach; ?>
    </div>
</div>
