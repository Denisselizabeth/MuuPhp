<?php
require_once ('MySQLDB.php');

class modelo
{
  public $table;
  public $columns;
  public $data;
  public $db;

  public function __construct($data=[])
  {
    $this->data=$data;
    $this->db=new MySQLDB();
  }
  public FUNCTION save()
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
  public function getAttr($attr){
    return isset($this->data[$attr]) ? $this->data[$attr] : null;
  }
  public function setAttr($attr,$value)
  {
    $this->data[$attr]=$value;
  }

}

?>
