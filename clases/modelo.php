<?php
require_once ('MySQLDB.php');

Use Database\MySQLDB;

abstract class modelo
{
  private $db;
  private $table;
  private $columns;
  private $data;

  public function __construct($data=[])
  {
    $this->data=$data;
    $this->db = new MySQLDB();
  }

  public function save()
  {
    if (!$this->getAttr('id')){
      $this->insert();
    }else{
      $this->update();
    }
  }

  private function insert(){
    $this->db->insert($this->data, $this);
  }

  private function update(){
    $this->db->update($this->data, $this);
  }

  public function getAttr($attr){
    return isset($this->data[$attr]) ? $this->data[$attr] : null;
  }

  public function setAttr($attr,$value)
  {
    $this->data[$attr]=$value;
  }

}

?>
