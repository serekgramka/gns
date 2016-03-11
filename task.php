<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test GNS</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
  	<script type="text/javascript" src="script.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <div class="row">
  	<div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="articles.php">Все записи</a></li>
          <li><a href="index.php">Добавить запись</a></li>
          <li><a href="task.php">Задачка</a></li>
        </ul>
    </div>
    <h2>Введите число:</h2>
    <form method="POST" id="form" action="javascript:void(null);" onsubmit="task()" class="form-horizontal" role="form">
      <div class="form-group">
        <div class="col-sm-5">
          <input type="number" name="num" class="form-control" id="num" placeholder="Число">
        </div>
      </div>
  	  <input type="hidden" name="type" value="task"/>
      <div class="form-group">        
        <div class=" col-sm-10">
          <button type="submit" class="btn btn-default">Отправить</button>
        </div>
      </div>
    </form>
    <div id="task" class="col-sm-12"></div>
  </div>
</div>
</body>
</html>