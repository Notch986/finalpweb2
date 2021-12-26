<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class LocalsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable("locals");
    }
}