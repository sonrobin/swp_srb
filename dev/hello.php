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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">부산경상대 손로빈</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">main</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/">3월 28일<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/dev/hello.php">hello.php 예제</a></li>
          <li><a href="/dev/find.php">find.php 예제</a></li>
        </ul>
      </li>
      <li><a href="/">4월 4일</a></li>
    </ul>
  </div>
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