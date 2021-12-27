<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class PrordersTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable("prorders");
    }
}   