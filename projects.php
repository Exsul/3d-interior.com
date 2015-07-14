<div class='projects'>
<?php
$categories =
[
  'interior' => 'Интерьеры',
  'exterior' => 'Экстерьеры',
  'object' => 'Объекты',
  'character' => 'Персонажи',
];
include('category_menu.php');


$everything = false;
if ($_GET['category'] != null)
  include('list_category.php');
else
{
  $everything = true;
  foreach ($categories as $k => $v)
  {
    $_GET['category'] = $k;
    include('list_category.php');
  }
}

?>
</div>