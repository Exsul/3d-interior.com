<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$page = $_GET['page'];
?>
<head>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.4/semantic.min.js"></script>
<script src="/script.js"></script>
<style>
@import "/a.css" screen;
@import "//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.4/semantic.min.css";
</style>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body class='root <?= strlen($page) ? htmlentities($page) : 'home' ?>-page'>
  <div class='wrapper'>
    <div class='not footer'>
      <div class='head line'>
        <div class='absolute bind left'>
<?php
$page = $_GET['page'];

include('descriptor.php');
include('menu.php');
?>
        </div>
        <div class='absolute bind right'>
<?php
include('cta.php');
?>
        </div>
      </div>

      <div class='ui body container'>
<?php
switch ($page)
{
case null:
  include('home.php');
  break;
case 'projects':
  include('projects.php');
  break;
case 'tarifs':
  include('tarifs.php');
  break;
case 'about':
  include('about.php');
  break;
case 'contacts':
  include('contacts.php');
  break;
default:
  include('page404.php');
  break;
}
?>
      </div>
    </div>
<?php
include('footer.php');
?>
  </div>
</body>
