<?php
$header = include_once('header.php');
$content = include_once('contentPost.php');
$footer = include_once('footer.php');

$html = "<!doctype html>

<html lang='en'>
<head>
  <meta charset='utf-8'>

  <title>$title</title>
  <meta name='description' content='Basic HTML5 Page'>
  <meta name='author' content='Your name'>

  <link rel='stylesheet' href='css/styles.css?v=1.0'>

</head>

<body>
$header
$content
$footer
</body>
</html>";