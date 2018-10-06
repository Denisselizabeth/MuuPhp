<?php

class usuario extends modelo
{
  public $table = 'usuarios';
  public $columns = ['name', 'gender', 'address', 'telephone', 'email', 'pass', 'avatar'];
}
