<?php
class DB{

  private $host = 'localhost';
  private $username = 'root';
  private $password = '';
  private $database = 'minishop';
  private $db;

  public function __construct($host = null, $username = null, $password = null, $database = null){
    if($host != null){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    try{
    $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, 
        array(
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));
        }catch(PDOException $e){
          die('<h1>Impossible de se connecter a la base de donnee</h1>');
        }
  }
  public function query($sql, $data = array()){
    $req =$this->db->prepare($sql);
    $req->execute($data);
    return $req->fetchAll(PDO::FETCH_OBJ);
  }

}
$DB = new DB('localhost','root','','minishop');

?>

<?php

  // Création de la base de donnée
  $servname = "localhost"; // Je travail en local donc localhost
  $dbname = "minishop"; // nom de la base de donnée
  $user = "root"; // Toujours ça sur mac
  $pass = ""; // Toujours ça sur mac

  $pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass); // je me connecte

  //On gère les exceptions
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    ?>