<?php
class Connection 
{
	private static $dbName = 'membre' ; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'root';
	private static $dbUserPassword = '';
	
	private static $connexion  = null;
	
	public function __construct() {
		exit('Init function is not allowed');
	}
	
	public static function getConnection()
	{
	   // Connexion DB pour l'application entière
       if ( null == self::$connexion )
       {      
        try 
        {
          self::$connexion =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$connexion;
	}
	
	public static function disconnect()
	{
		self::$connexion = null;
	}
}
?>