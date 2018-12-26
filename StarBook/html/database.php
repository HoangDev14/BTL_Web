<?php
class Database
{
public $con;
function __construct(){
   $this->con = new PDO('mysql:host=localhost;dbname=sb_database;charset=utf8','root' ,'');
}
function exec_sql($sql)
{
$stmt= $this->con->prepare($sql);
 $stmt->execute();
 $results = $stmt->fetchAll();
 return $results;
}
}
?>