<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php-strutils</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<h1>Php StrUtils</h1>
<?php
include 'StrUtils.php';

$myStr = new StrUtils('php is awesome !');

echo $myStr->bold().'<br>';
echo $myStr->italic().'<br>';
echo $myStr->underline().'<br>';
echo $myStr->capitalize().'<br>';
echo $myStr->uglify().'<br>';

?>
    
</body>
</html>