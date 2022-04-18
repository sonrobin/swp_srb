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
<script>
<?php
    function txtsaver(){
        require './dbconfig.php';
        $conn = new mysqli($host, $user, $pw, $dbName);
    
        /* DB 연결 확인 */
        if($conn){ echo "Connection established"."<br>"; }
        else{ die( 'Could not connect: ' . mysqli_error($conn) ); }

        $txt=$_POST['email'];
        $sql = "INSERT INTO `keyword` (`keyword`) VALUES ("+$txt+") ON DUPLICATE KEY UPDATE cnt = cnt + 1";
        $result = mysqli_query($conn, $sql);
 	
        if($result) { echo "insert success!"; }
        else { echo "failure"; }
    
        mysqli_close($conn);
     }
    
?>
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

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/">4월 11일<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/dev/action_page.php">action_page.php 예제</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
<br>

<div class="container">
  
  <form class="form-inline">
    <h1>검색하기</h1>
    <label for="email">검색:</label>
    <input type="text" class="form-control" id="email"  name="email">


    <button type="button" class="btn btn-primary" onclick="<?php txtsaver(); ?>">Submit</button>
  </form>
</div>



</body>
</html>