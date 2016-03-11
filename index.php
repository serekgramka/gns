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
    <h2>Добавление записи</h2>
    <div class="error_area"></div>
    <form method="POST" id="form" action="javascript:void(null);" onsubmit="send()" class="form-horizontal" role="form">
      <div class="form-group">
        <label class="control-label col-sm-1" for="name">Имя:</label>
        <div class="col-sm-5">
          <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя записи">
        </div>
      </div>
      <div class="form-group">
      	<div class="col-sm-1"></div>
      	<div class="col-sm-5">
  		    <div class="checkbox">
  			  <label><input name="isactive" type="checkbox" value="1">Запись активна?</label>
  			</div>
  		</div>
  	</div>
  	<input type="hidden" name="type" value="send"/>
      <div class="form-group">        
        <div class="col-sm-offset-1 col-sm-10">
          <button type="submit" class="btn btn-default">Добавить</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>