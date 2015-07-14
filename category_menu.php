<ul class='category menu'>
  <li>
    <a href="/projects" class='<?= $_GET['category'] == null ? 'hey' : '' ?>' >Все работы</a>
  </li>
<?php
foreach ($categories as $url => $name)
{
  $hey = $_GET['category'] == $url ? 'hey' : '';
?>
  <li>
    <a href="/projects/<?= $url ?>" class='<?= $hey ?>' ><?= $name ?></a>
  </li>
<?php
}
?>
</ul>