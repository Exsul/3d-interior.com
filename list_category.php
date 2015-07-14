<?php

$category = $_GET['category'];
$dir = "projects/$category/";
$projects = glob("{$dir}*", GLOB_ONLYDIR);

if (!$everything)
  include("{$dir}intro.php");

?>
<div class='ui three doubling cards projects category list'>
<?php
foreach ($projects as $project)
{
  $project = str_replace($dir, "", $project);
  include('project_thrumbnail.php');
?>
<?php
}
?>
</div>