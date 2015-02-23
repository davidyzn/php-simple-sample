<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>欢迎访问我们的首页！</h1>
<p>一段文本。</p>
<p>一段文本。</p>

<?php 
$s=ini_get('include_path');
ini_set($s . PATH_SEPARATOR . '/www/');

include '/015.php';
?>
</body>
</html>
