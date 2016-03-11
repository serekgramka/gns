<?php 

define('SERVER', 'serkgr.mysql.ukraine.com.ua');
define('USER', 'serkgr_gns');
define('PASS', 'rpzeflhf');
define('DBNAME', 'serkgr_gns');


class DB{

	private $server;
	private $user;
	private $pass;
	private $dbname;
	private $db;

	function __construct($server, $user, $pass, $dbname){
		$this->server = $server;
		$this->user   = $user;
		$this->pass   = $pass;
		$this->dbname = $dbname;
		$this->createConnection();
	}
	public function createConnection(){
		if(!$this->db){
			$connection = mysql_connect($this->server, $this->user, $this->pass) or die("Ошибка соединения с сервером");
			
			$selectedDB = @mysql_select_db($this->dbname, $connection);

			if($selectedDB){
				$this->db = true;
				return true;

			}else{
				return false;

			}
		}else{
			return true;

		}
	}

	public function select($what, $from, $where = NULL, $order = NULL){
		$fetched = array();
		$sql = 'SELECT '.$what.' FROM '.$from;

		if($where != NULL){
			$sql .= ' WHERE '.$where;
		}

		if($order != NULL){
			$sql .= ' ORDER BY '.$order;
		}
		$sql .= ' DESC';

		$query = mysql_query($sql);

		if($query){
			$count = 0;
			while($row = mysql_fetch_array($query)) {
			   $fetched[$count] = [$row['name'], $row['year']];
			   $count++;
		    }
			return $fetched;	

		}else{
			return false;

		}
	}

	public function insert($name, $year, $isactive){
		$insert="INSERT INTO `films4`(name,year,isactive)  
				VALUES ('$name', '$year', '$isactive')";
		$ins = mysql_query($insert);
		$ret = ($ins)? 'true' : 'false';
		return $ret;
	}

	public function closeConnection(){
		if($this->db){  
			if(@mysql_close()){
			    $this->db = false;
				return true;

			}else{
				return false;

		    }
	    }
	}

}

 ?>