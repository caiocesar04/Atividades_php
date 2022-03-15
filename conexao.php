<?php
     class conexao{
         private static $conn;
         public function __construct()
         {
             $this->abreConexao();
         }
         public static function conectar()
         {
         if(null == self:: $conn)  {
         try 
         {   
         self::$conn = new PDO('mysql:host=localhost;dbname=filme', 'root','bancodedados');
         }
         catch(PDOException $exception)
         { die($exception->getMessage());}  
         }
         return self::$conn;
         }
         public static function desconectar(){ self::$conn = null;}




     }
     ?>
