<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Resto</a>
    </div method="post">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right" >
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> login</a></li>

    </ul>
  </div>
</nav>
<?php
  if(array_key_exists('page0', $_POST)) {
    page0();
  }
  else if(array_key_exists('page1', $_POST)) {
    page1();
  }
  function page0() {
    header('Location:/acc.php');
    exit();
  }
  function page1() {
    header('Location:/Views/Layouts/a.php');
    exit();
  }
?>

<form method="post">
  <input type="submit" name="page0"
      class="button" value="page0" />

  <input type="submit" name="page1"
      class="button" value="page1" />
</form>

</body>
</html>
