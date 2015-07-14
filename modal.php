<?php
$category = $_GET['category'];
$project = $_GET['project'];
$dir = "projects/$category/";
?>

<?php include("$dir$project/info.php") ?>
<div class="ui modal"  id="<?= "$category_$project" ?>_modal">
  <i class="close icon"></i>
  <div class="header">
    <?= $info['name'] ?>
  </div>
  <div class="content">
    <div class="ui big image">
      <img src="/<?= $dir.$project ?>/img.jpg">
    </div>
    <div class="description">
      <div class="ui header"><?= $info['client'] ?></div>
      <?= nl2br($info['description']) ?>
    </div>
  </div>
  <div class="actions">
    <div class="ui black right labeled icon button">
      OK
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>