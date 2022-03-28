<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP사이트</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">메인</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/dev/hello.php">헬로월드</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/dev/find.php">검색</a>
    </li>
  </ul>
</nav>
<br>

<div class="container-fluid">
  <h3>내 PHP 사이트</h3>


</div>

</body>
</html>

<?php
    $i = 1;

	while($i<=100)
	{
		echo "hello<br/>";
		$i++;
	}
?>