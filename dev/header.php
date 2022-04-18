<?php

echo '<nav class="navbar navbar-inverse">
<div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="/">부산경상대 손로빈</a>
  </div>
  <ul class="nav navbar-nav">
    <li class="active"><a href="/">main</a></li>

    <!-- drop down menu code top -->
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/">3월 28일<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/dev/hello.php">hello.php 예제</a></li>
        <li><a href="/dev/find.php">find.php 예제</a></li>
      </ul>
    </li>
    <!-- drop down menu code bottom -->

    <li><a href="/">4월 4일</a></li>
  </ul>
</div>
</nav>';
?>