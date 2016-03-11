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
 <?php 
require_once 'main.class.php';
$db = new DB(SERVER,USER,PASS,DBNAME);
	$all_items = $db->select('*', 'films4', 'isactive = 1', 'id');
	 //echo '<pre>'; print_r($all_items); echo '</pre>';
	 $db->closeConnection();
 ?>
<div class="container">
  <div class="row">
  	<div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="articles.php">Все записи</a></li>
          <li><a href="index.php">Добавить запись</a></li>
          <li><a href="task.php">Задачка</a></li>
        </ul>
    </div>
    <h2>Cписок записей</h2> 
    <?php
      foreach ($all_items as $item) {?>
        <article class="col-sm-10 col-md-10">
          <H2><?php echo $item['0'];?></H2>
          <p><?php echo $item['1'];?></p>
        </article>
    <?php  } ?>
  </div>  
</div>
</body>
</html>