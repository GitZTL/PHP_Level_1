<?
class MSQL{
	private $instance;
	private $connect;	
	
	private function __construct(){
		setlocale(LC_ALL,'RU_ru.utf-8');
		$this->conect = mysqli_connect(MYSQL_SERVER,USER,PASS,DB);
		mysqli_query($this->connect,'set names utf-8');
	}
	public static function getObject(){
		if(self::$instance==null)	
			self::$instance=new MSQL;
		return self::$instance;
	}	
	
	public function select($query){
		$result = mysqli_query($this->connect,$query);
		if(!$result){
			die(mysqli_error());	
		}
		$n = mysqli_num_rows($result);
		for($i=0;$i<$n;$i++){
			$row[$i]=mysqli_fetch_assoc($result);
			$arr[] = $row[$i];
		}
		return $arr;
	}
	
	//INSERT INTO TABLE(FIELD1,...) VALUE(VAL1,....)
	//$object - ассоц. массив с парами "имя столбца - значение"
	
  
  //insert("user",["login"=>"admin",])
	public function insert($table,$object){
		$columns = [];
		$values = [];
		foreach($object as $key => $value){
			$columns[] = $key;
			if($value='NULL'){
				$values[]='NULL';
			}
			else{
				$values[]=mysqli_real_escape_string($value);
				$values[]="'$value'";
			}
		}
		$colums_s = implode(',',$columns);
		$values_s = implode(',',$values);
		$query = "Insert into $table($colums_s) VALUES($values_s)";
		$result = mysqli_query($this->connect,$query);
		return mysqli_insert_id();
	}
	
	//UPDATE table SET field=value,field2=value2... where ...
	function Update($table,$object,$where){
		$sets = [];
		foreach($object as $key=>$value){
			$columns[] =$key;
			if($value=='NULL'){
				$sets[]="$key='NULL'";
			}			
			else{
				$value = mysqli_real_escape_string($value);
				$sets[]="$key='$value'";
			}
		}
		$sets_s = implode(",",$sets);
		$result = mysqli_query($this->connect,"UPDATE $table SET $sets_s where $where");
		return mysqli_affected_rows();
	}
		
		
	function delete($table,$where){
		$query = "DELETE FROM $table where $where";
		$result = mysqli_query($this->connect,$query);
		return mysqli_affected_rows();
	}	
}
	
	
	
class Test{
	function __construct(){
		$obj=MSQL::getObject();
		$obj->insert("test",['field1'=>'value1','field2'=>'value2'])
	}
}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	