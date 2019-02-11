<?php

namespace app\services;

use app\traits\TSingltone;

class Db implements IDb
{

	use TSingltone;

    public function queryOne(string $sql, array $params = [])
    {
        return [];
    }

    public function queryAll(string $sql, array $params = []){
        return [];
    }
}