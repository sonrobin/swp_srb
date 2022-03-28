<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
      function movefind() 
      {
        const name = document.getElementById('email').value;
        location.href="https://www.google.com/search?q="+name;
    }

  </script>
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