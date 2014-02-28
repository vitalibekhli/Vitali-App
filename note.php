<?
require_once('databaseconfig.php');
$mySQL = new db();
$data = $mySQL->query("SELECT * from Notes ORDER BY id DESC");
$total_pages = ($data->num_rows/2);

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Admin Login</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="/packaged/css/semantic.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="/packaged/javascript/semantic.js"></script>
  <script src="/js/login.js"></script>
  <script src="/js/index.js"></script>

</head>
<body id="home">
<div class="ui pagination menu">
  <a id="before-page"class="icon item">
    <i class="left arrow icon"></i>
  </a>
  <a id="page-number" class="active item">
    1
  </a>
  <div class="disabled item">
    ...
  </div>
  <a id="number-of-pages" class="item">
    <? echo round($total_pages);?>
  </a>
  <a id="next-page" class="icon item">
    <i class="right arrow icon"></i>
  </a>
</div>
<div id="notes-content" class="five column doubling ui grid">
</div>

</body>
</html>