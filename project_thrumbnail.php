<?php include("$dir$project/info.php") ?>

<div class="ui card project thrumbnails" id="<?= "$category_$project" ?>" url="<?= $dir.$project ?>">
  <div class="image">

<div class="ui dimmer">
      <div class="content">
        <div class="center">
          <h2 class="ui inverted header"><?= $info['name'] ?></h2>
        </div>
      </div>
</div>

    <img src='/<?= $dir.$project ?>/img.jpg' />
  </div>
  <div class="content">
<?php /*
    <a class="header"><?= $info['name'] ?></a>
    <div class="meta">
      <span class="date"><?= $info['date'] ?></span>
    </div>
*/ ?>
    <div class="description">
      <?= $info['brief'] ?>
    </div>
  </div>
  <div class="extra content">
    <a>
      <i class="user icon"></i>
      <?= $info['client'] ?>
    </a>
  </div>
</div>