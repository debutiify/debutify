// redirect.php
<?php
$url = $_GET['url'];
?>
<html>
<head>
  <meta name="referrer" content="no-referrer">
  <meta http-equiv="refresh" content="0;url=<?php echo htmlspecialchars($url); ?>">
</head>
<body></body>
</html>
