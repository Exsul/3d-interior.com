<ul class='main menu'>
<?php
$menu =
[
  "projects" => "Услуги",
  "tarifs" => "Тарифы",
  "about" => "О нас",
  "contacts" => "Контакты",
];

foreach ($menu as $url => $name)
{
  $hey = $url == $page;
?>
  <li class='<?= !$hey ? '' : 'hey' ?>'>
    <a href="/<?= $url ?>"><?= $name ?></a>
  </li>
<?php
}

?>
</ul>