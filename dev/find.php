<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
      function movefind() 
      {
        const name = document.getElementById('email').value;
        location.href="https://www.google.com/search?q="+name;
    }

  </script>
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

<div class="container">
  
  <form class="form-inline">
    <label for="email">검색:</label>
    <input type="text" class="form-control" id="email"  name="email">

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">
      </label>
    </div>
    <button type="button" class="btn btn-primary" onclick="movefind()">Submit</button>
  </form>
</div>

</body>
</html>