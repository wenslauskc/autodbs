<?php
try{
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc',
'wenslausn', 'ngezi');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e){
$e->getMessage() . ' in ' .
$e->getFile() . ':' . $e->getLine();
}


?>