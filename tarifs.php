<?php for ($i = 0; $i < 4; $i++) if (1): ?>

<h1>Услуга <?= $i ?></h1>

Создаем изображенияСоздаем изображенияСоздаем изображенияСоздаем изображенияСоздаем изображенияСоздаем изображенияСоздаем изображенияСоздаем изображения
<?php
$tariff =
[
  [
    "Стандартный пакет",
    "300р-600р/м2",
    "2 перспективных визуализации на помещение, 1920px по большей стороне",
    "1-3 дня на помещение"
  ],
  [
    "Стандартный пакет",
    "300р-600р/м2",
    "2 перспективных визуализации на помещение, 1920px по большей стороне",
    "1-3 дня на помещение"
  ],
  [
    "Стандартный пакет",
    "300р-600р/м2",
    "2 перспективных визуализации на помещение, 1920px по большей стороне",
    "1-3 дня на помещение"
  ],
  [
    "Стандартный пакет",
    "300р-600р/м2",
    "2 перспективных визуализации на помещение, 1920px по большей стороне",
    "1-3 дня на помещение"
  ],
];


?>

<table class='ui inverted table'>
  <tr>
    <th>
      Услуга
    </th>
    <th>
      Цена
    </th>
    <th>
      Что входит в цену
    </th>
    <th>
      Сроки
    </th>
  </tr>
<?php
foreach ($tariff as $row)
{
?>
  <tr>
<?php
  foreach ($row as $col) 
    echo "<td>$col</td>";
?>
  </tr>
<?php
}
?>
</table>
*ЗаказчикомЗаказчикомЗаказчикомЗаказчикомЗаказчикомЗаказчикомЗаказчикомЗаказчиком

<h2>Дополнительные условия</h2>

<ol>
  <li>При большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работ</li>
  <li>При большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работ</li>
  <li>При большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работ</li>
  <li>При большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работПри большом обьеме работ</li>
</ol>

<?php endif; ?>