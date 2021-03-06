<?php
require("class.log.php");


class database{
	
	private $dbh;	
	private $squery;	
	private $settings;	
	private $dbconnected = false;	
	private $log;	
	private $parameters;
	//public $table;
	
	public function __construct()
		{ 	
			$this->log = new Log();			
			$this->parameters = array();
		}
		
	//connect to database	
	private function connect(){	
		$this->settings = parse_ini_file( dirname(__FILE__)."/../settings.ini.php");		
		$dsn = 'mysql:dbname='.$this->settings["dbname"].';host='.$this->settings["host"].'';
		try 
		{
		
		$this->dbh = new PDO($dsn, $this->settings["user"], $this->settings["password"], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));				
		
		$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);			
		$this->dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);				
		$this->dbconnected = true;
		//echo "connect";			
		}
		catch (PDOException $e) 
		{		# Write into log
			echo $this->ExceptionLog($e->getMessage());
			die();
		}
	}
	
	
	private function ExceptionLog($message , $sql = "")
	{
		$exception  = 'Unhandled Exception. <br />';
		$exception .= $message;
		$exception .= "<br /> You can find the error back in the log.";

		if(!empty($sql)) {
			# Add the Raw SQL to the Log
			$message .= "\r\nRaw SQL : "  . $sql;
		}
			# Write into log
			$this->log->write($message);

		return $exception;
	}	
	
		
	//disconnect database	
	public function disconnect()
	 	{	 		
	 	$this->pdo = null;
	 	}
	
	
	public function bind($para, $value)
		{	
			$this->parameters[sizeof($this->parameters)] = ":" . $para . "\x7F" . $value;
		}
		
		
	public function bindMore($parray)
		{
			if(empty($this->parameters) && is_array($parray)) {
				$columns = array_keys($parray);
				foreach($columns as $i => &$column)	{
					$this->bind($column, $parray[$column]);
				}
			}
		}	
	//core fuction 
	private function init($query,$parameters = "")
		{
			
			if(!$this->dbconnected) { $this->Connect(); }
			try {
					
				$this->squery = $this->dbh->prepare($query);		
				$this->bindMore($parameters);			
				if(!empty($this->parameters)) {
					foreach($this->parameters as $param)
					{
						$parameters = explode("\x7F",$param);
						$this->squery->bindParam($parameters[0],$parameters[1]);
					}		
				}
	
				$this->succes = $this->squery->execute();		
			}
				catch(PDOException $e)
			{		
				echo $this->ExceptionLog($e->getMessage(), $query );
				die();
			}			
		$this->parameters = array();
		}
		
		
	 public function query($query,$params = null, $fetchmode = PDO::FETCH_BOTH )
		{
			if(!$this->dbconnected){
				$this->connect();
				}
			
			$query = trim($query);
			$this->init($query,$params);
			$rawStatement = explode(" ", $query);
			
			# Which SQL statement is used 
			$statement = strtolower($rawStatement[0]);
			
			if ($statement === 'select' || $statement === 'show') {
				return $this->squery->fetchAll($fetchmode);
			}elseif ($statement === 'insert' ) {
				return $this->dbh->lastInsertId();
			}
			elseif ( $statement === 'update' || $statement === 'delete' || $statement === 'count' ) {
				return $this->squery->rowCount();	
			}	
			else {
				return NULL;
			}
			$this->disconnect();
		}
		
		
	//get last insert id	
	public function lastInsertId() {
		
		if(!$this->dbconnected){
				$this->connect();
				}
			return $this->dbh->lastInsertId();
			$this->disconnect();
		}
	
	
	//set placeholder
	public function placeholder($parray , $popid = FALSE , $join = FALSE ,$operator = " = ") {			
			$column = array_keys($parray);
			
			if($popid == TRUE) {	
			foreach($column as $i) {
				if($i=='id') {
				#nothing happens here....
				}else{
					$placeholder[]=$i." = :".$i;
				}
			}
				}else {
					
						foreach($column as $i) {
							$placeholder[]=$i.$operator."  :".$i;
						}
				}	


			if( $join == TRUE){
				$join = strtoupper($join);
				return  $values =implode( " ".$join." " , $placeholder);
			}else{
				return  $values =implode( ' , ' , $placeholder);
			}	
					
			
		}	
		
			 
	//get single value
	public function get_single($get,$param=null,$table){
		if(!$this->dbconnected){
				$this->connect();
				}
		
		$condition=$this->placeholder($param);
		 
		$sql="SELECT ".$get." FROM ".$table." WHERE ".$condition." ";
		$this->init($sql,$param);
		return $this->squery->fetchColumn();		
		$this->disconnect();
		}

		
	//get single row data
	public function get_single_row($get="*",$params = null,$table,$fetchmode = PDO::FETCH_ASSOC)
		{	
		if(!$this->dbconnected){
				$this->connect();
				}	
			if(empty($get)|| strtolower($get)=="all"){$get="*";}
			
			$condition=$this->placeholder($params);
			
			$sql="SELECT ".$get." FROM ".$table." WHERE ".$condition." ";			
			$this->init($sql,$params);
			return $this->squery->fetch($fetchmode);
				$this->disconnect();						
		}

		#get all data
	public function get_all($params = null,$table,$get = "*",$fetchmode = PDO::FETCH_ASSOC)
		{	
		if(!$this->dbconnected){
				$this->connect();
				}	
			if(empty($get)|| strtolower($get)=="all"){$get="*";}
			
			$condition=$this->placeholder($params);
			
			$sql="SELECT ".$get." FROM ".$table." WHERE ".$condition." ";			
			$this->init($sql,$params);
			return $this->squery->fetchAll($fetchmode);
				$this->disconnect();						
		}	
		
	//insert values	
	public function insert($params = null,$table){
		if(!$this->dbconnected){
				$this->connect();
				}
		$column = array_keys($params);	
		foreach($column as $i) {
			$placeholders[]=":".$i;
			}
		$fields=implode(',',$column);
		$values =implode(',',$placeholders);	
		$sql="INSERT INTO ".$table." (".$fields.") 	VALUES(".$values.")";
		return $this->query($sql,$params);
		$this->disconnect();
		}		
	//update funcion	
	public function update($parray = null,$condition,$table){
		if(!$this->dbconnected){
				$this->connect();
				}				
		$fields=$this->placeholder($parray,TRUE); // ture pops id of the array
		$where=$this->placeholder($condition);		
		
		$sql="UPDATE ".$table." SET ".$fields." WHERE ".$where."";
		
		$params=array_merge($parray,$condition);
		return $this->query($sql,$params);
		$this->disconnect();
		}
		
		
		//function count
	public function	 countrow($parray = NULL , $table , $join = NULL , $operator = '='){
		if(!$this->dbconnected){
				$this->connect();
				}	
			if($parray) {	

				if((sizeof($parray)>1) && !$join){
					throw new Exception(" Missing argument for countrow", 1);					
				}

			echo	$where=$this->placeholder($parray , FALSE , $join , $operator); 
				$sql="SELECT  * FROM ".$table."  WHERE ".$where." ";
			}else{
				$sql="SELECT  * FROM ".$table." ";
			}

			$this->query($sql,$parray);
			return $this->squery->rowCount();
			$this->disconnect();		
		}
	
	public function count($sql,$parray = NULL){
		if(!$this->dbconnected){
				$this->connect();
				}
			$this->query($sql,$parray);
			return $this->squery->rowCount();
			$this->disconnect();	
	}	
	
	public function delete($table,$parray = NULL){	

		if($parray){
			$where=$this->placeholder($parray);
			$sql="DELETE FROM ".$table." WHERE ".$where." ";
		}else{
			$sql="DELETE FROM ".$table." ";
		}
		return $this->query($sql,$parray);	
		$this->disconnect();
	}	


	public function truncate( $table ){	
		$sql="TRUNCATE TABLE ".$table." ";		
		return $this->query($sql);	
		$this->disconnect();
	}	

		
	//search function	
	public function search_data($s,$table,$range){			
		if(!$this->dbconnected){
				$this->connect();
				}
		
		foreach($range as $i) {
					$values[]=$i." like ?";
					}
		  $placeholder =implode(' OR ',$values);	
			
		$sql="SELECT * FROM ".$table." WHERE  ".$placeholder."";
		$stmt = $this->dbh->prepare($sql);
		
		for($i=1;$i<=sizeof($range);$i++){
		$stmt->bindValue($i, '%' .$s. '%');		
		}
		$stmt->execute();
		return $stmt->fetchAll();			
		}	
		//searchends			
				
	
	}
//ends class



