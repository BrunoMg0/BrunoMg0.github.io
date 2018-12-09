<?php


class Conexao {
        private static $instancia;
        
        private function __construct() {
          
        }
        
        public static function getInstance(){
            if(!isset(self::$instancia)){
                //criar um novo objeto
                self::$instancia = new PDO('mysql:host=localhost;dbname=meuprojeto', 
                        'root',
                        '', 
                        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$instancia->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, PDO::NULL_EMPTY_STRING);                
                self::$instancia->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);                
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
            }
            
            return self::$instancia;
                
        } 
        
        

}
?>