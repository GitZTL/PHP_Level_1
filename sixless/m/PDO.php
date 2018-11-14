<?
class PDO{
	const DB_HOST = 'localhost';
	const DB_NAME = 'test';
	const DB_USER = 'root';
	const DB_PASS = '';
	const DB_CHARSET = 'utf-8';
	
	static $instance;
	
	
	private function __construct(){
		
	}
	
	public static getInstance(){
		$settings = 'mysql:host='.self::DB_HOST.";dbname=".self::DB_NAME.";charset=".self::DB_CHARSET;
		
		if(self::$instance===null){
				self::$instance = new PDO($settings,self::DB_USER,self::DB_PASS);
		}
		return self::$instance;
	}
	
	private function sql($sql,$args=[]){
		$stmt = self::getInstance()->prepare($sql);
		$stmt->execute($args);
		return $stmt;		
	}
	
	private static function getRows($sql,$args=[]){
		return self::sql($sql,$args)->fetchAll();		
	}
	
	private static function insert($sql,$args=[]){
		self::sql($sql,$args);	
		return self::getInstance()->lastInsertId();
	}
	
	private static function update($sql,$args=[]){
		$stmt = self::sql($sql,$args);	
		return $stmt->rowCount();//получили количество измененных записей
	}
	
	private static function delete($sql,$args=[]){
		$stmt = self::sql($sql,$args);	
		return $stmt->rowCount();//получили количество измененных записей
	}
}	
	
	
$object = PDO::getInstance();

$mas=[];
$mas = $object->getRows("select id,name from table");	
echo $mas[id];
	
	
class Demo extends PDO{
	function catalog(){
		PDO::getRows();
	}
}	
	
	
	
	
	
	
	
	
	
	
	
	
	