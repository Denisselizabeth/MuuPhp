<?php

namespace DB;

abstract class DB
{
  abstract public function insert($data, $model);

  abstract public function update($data, $model);

  abstract public function select($data, $model);

  abstract public function delete($data, $model);
}
